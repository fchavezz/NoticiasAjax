<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use Redirect;
Use Session;
use App\Categories;
use App\Post;
use App\Tags;
use App\Post_Tags;
use App\Pictures;
use Storage;
use Illuminate\Routing\Route;
//use Illuminate\Auth\Access\Response;
use  Illuminate\Support\Facades\Input;
use DB;


class NotasController extends Controller
{

   public function newcat(Request $request)
  {
    $rules = array(
                'newCat' => 'required|alpha_num',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Response::json(array(

                    'errors' => $validator->getMessageBag()->toArray(),
            ));
        } else {
            $data = new Categories();
            $data->name = $request->name;
            $data->save();

            return response()->json($data);
        }
    
    }




    public function mosaicoNotas(){


        $principalNoticias = DB::table('posts')
                     ->join('pictures', 'posts.id', '=', 'pictures.post_id')
                     ->select(['url_picture','posts.slug as tit','title'])
                     ->where([
                        ['pictures.type', '=',1],//imagen principal                        
                        ['posts.status', '=', 1],//1 se publica, 2 solo se guarda
                        ['posts.type', '=', 1]//1 noticia 2 evento
                        ])
                     ->orderBy('posts.id', 'desc')
                     ->paginate(1); //1er cuadro principal
                     

        $secundariasNoticias = DB::table('posts')
                     ->join('pictures', 'posts.id', '=', 'pictures.post_id')
                     ->select(['url_picture','posts.slug as tit','title'])
                     ->where([
                        ['pictures.type', '=',1],//imagen principal                        
                        ['posts.status', '=', 1],//1 se publica, 2 solo se guarda
                        ['posts.type', '=', 1]//1 noticia 2 evento
                        ])
                        ->inRandomOrder()
                        ->paginate(2); //2 cuadros secundarios
        

        $ultimasNoticias = DB::table('posts')
                     ->join('pictures', 'posts.id', '=', 'pictures.post_id')
                     ->select(['url_picture','posts.slug as tit','title'])
                     //->where('', '=', 1)
                     ->where([
                        ['pictures.type', '=',1],//imagen principal                        
                        ['posts.status', '=', 1],//1 se publica, 2 solo se guarda                          
                        ['posts.type', '=', 1]//1 noticia 2 evento                        
                        ])
                     ->inRandomOrder()
                     ->paginate(4); //8 cuadros 
                     //->get();



        //dd($ultimasNoticias);
        return view('noticias.mosaicoNoticias')->with(['ultimasNoticias'=>$ultimasNoticias,'principalNoticias'=>$principalNoticias,'secundariasNoticias'=>$secundariasNoticias]);   
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias=Categories::all();        
        $tags=Tags::all();
        return view('notas.create')->with(['categorias'=>$categorias,'tags'=>$tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('notas.create');
        //return view('noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ban=1;
        $this->validate($request,[
            'tipo'=>'required',
            'titulo'=>'required|max:50',
            'subtitulo'=>'required|max:50',
            'categoria'=>'required',
            'datepicker'=>'required',
            'statusNota'=>'required',
            'tags'=>'required',
            'imagen'=>'required'            
            ],[
                'tipo.required' => 'Debes seleccionar que tipo de nota deseas redactar',
                'titlo.required'=> 'El campo Titulo es Obligatorio',
                'subtitlo.required'=> 'El campo Subtitulo es Obligatorio',
                'categoria.required'=> 'Selecciona una Categoria',
                'datepicker.required'=> 'Selecciona una Fecha',                
                'statusNota.required'=> 'Selecciona si deseas Guardar o Publicar la nota',
                'tags.required'=>'Selecciona almenos 1 #Etiqueta',                
                'imagen.required' => 'Se requiere una imagen principal'
            ]);
        $post = new Post();        
        $pict = new Pictures();        

        $post->title=$request->titulo;
        $post->subtitle=$request->subtitulo;
        $post->user_id=1;
        $post->content=$request->blog;
        $post->category_id=$request->categoria;
        $post->dateposted=$request->datepicker;
        $post->type=$request->tipo;//Variable para Noticias o Evento
        $post->status=$request->statusNota;//Variable para Guardar o Publicar
       // $post->save();        
        if($post->save()){    
            $ban=1;
            }else{
                $ban=0;
            }

        
        
        $has=Input::get('tags');
        foreach ($has as $h) {
            $ptags = new Post_Tags();        
            $ptags->post_id=$post->id;
            $ptags->tag_id=$h;
            $ptags->save();            
        }
        
        $img = $request->file('imagen');
        $file_route = time().''.$img->getClientOriginalName();
        Storage::disk('imgnoticas')->put($file_route,file_get_contents($img->getRealPath()));     

        $pict->url_picture=$file_route;
        $pict->post_id=$post->id;
        $pict->type=1; //principal o secundarias        
        $pict->save();        

        $files = Input::file('imagensec');
        $file_count = count($files);
        $uploadcount = 0;

        foreach ($files as $file) {
        $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
        $validator = Validator::make(array('file'=> $file), $rules);
        if($validator->passes()){
            $destinationPath = 'imgnoticas'; // upload folder in public directory
            $filename = $file->getClientOriginalName();
            $upload_success = $file->move($destinationPath, $filename);
            $uploadcount ++;
            $extension = $file->getClientOriginalExtension();           
            $pict2 = new Pictures();  
            $pict2->url_picture=time().''.$file->getClientOriginalName();
            $pict2->post_id=$post->id;
            $pict2->type=2; //principal o secundarias        
            $pict2->save();
        }
    }
        if($ban==1){     
            return back()->with('msj','Has creado una nueva Nota Existosamente');    
            //return redirect()->action('NotasController@index');
        }else{
            return back()->with('errormsj','Los datos no se guardaron.');
        }

       
    }


    public function getImagen($filename){
        $file=Storage::disk('imgnoticas')->get($filename);
        return new Response($file,200);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getSingle($slug){

        $noticiasInfo = DB::table('posts')
                     ->join('pictures', 'posts.id', '=', 'pictures.post_id')
                     ->join('categories','posts.category_id','=','categories.id')
                     ->select(['posts.title','posts.subtitle','posts.content','categories.name','posts.dateposted','pictures.url_picture','posts.slug'])
                     ->where([
                        ['pictures.type', '=',1],//imagen principal                        
                        ['posts.status', '=', 1],//1 se publica, 2 solo se guarda
                        ['posts.type', '=', 1],//1 noticia 2 evento
                        ['posts.slug','=',$slug]//verificacion del slug entrante.
                        ])
//                     ->orderBy('posts.id', 'desc')
                     ->get(); //1er cuadro principal
        $noticiasImgs= DB::table('posts')
                     ->join('pictures', 'posts.id', '=', 'pictures.post_id')                    
                     ->select(['pictures.url_picture'])
                     ->where([
                        ['pictures.type', '=',2],//imagen principal                        
                        ['posts.status', '=', 1],//1 se publica, 2 solo se guarda
                        ['posts.type', '=', 1],//1 noticia 2 evento
                        ['posts.slug','=',$slug]//verificacion del slug entrante.
                        ])
//                     ->orderBy('posts.id', 'desc')
                     ->get(); //1er cuadro principal

        $noticiasTags= DB::table('posts')
                     ->join('post_tags', 'posts.id', '=', 'post_tags.post_id')                    
                     ->join('tags', 'tags.id', '=', 'post_tags.tag_id')
                     ->select(['tags.name'])
                     ->where([                               
                        ['posts.status', '=', 1],//1 se publica, 2 solo se guarda
                        ['posts.type', '=', 1],//1 noticia 2 evento
                        ['posts.slug','=',$slug]//verificacion del slug entrante.
                        ])
//                     ->orderBy('posts.id', 'desc')
                     ->get(); //1er cuadro principal

          $ultimasNoticias = DB::table('posts')
                     ->join('pictures', 'posts.id', '=', 'pictures.post_id')
                     ->select(['url_picture','posts.slug as tit','title'])
                     //->where('', '=', 1)
                     ->where([
                        ['pictures.type', '=',1],//imagen principal                        
                        ['posts.status', '=', 1],//1 se publica, 2 solo se guarda                          
                        ['posts.type', '=', 1]//1 noticia 2 evento                        
                        ])
                     ->inRandomOrder()
                     ->paginate(6); //8 cuadros 
                     //->get();            

        return view('noticias.nota')->with(['noticiasInfo'=>$noticiasInfo,'noticiasImgs'=>$noticiasImgs,'noticiasTags'=>$noticiasTags,'ultimasNoticias'=>$ultimasNoticias]); 
                     



    }
}
