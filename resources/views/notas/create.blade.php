@extends('layouts.principal')
@section('content')
<script>
$( document ).ready(function() {

     $('#tags').change(function () {
        var parentid = $(this).val();
        var array = parentid;
        $("#t").val(array);
    });   

});
</script>
     
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <p class="lead"></p>
                    @if(session()->has('msj'))
                        <div class="alert alert-success" role="alert">{{session('msj')}}</div>
                    @endif
                    @if(session()->has('errormsj'))
                        <div class="alert alert-danger" role="alert">Error al enviar los datos</div>
                    @endif

                    <div class="panel-heading">Redaccion de la nueva nota</div>
                    <div class="panel-body">                       
{!!Form::open(['route'=>'notas.store','role'=>'form', 'method'=>'POST','autocomplete'=>'off','enctype'=>'multipart/form-data','files'=>true])!!}
                        {{ csrf_field() }}
                        
                        <div class="form-group center-block text-center" id="tipos">
                            {!!Form::label('Selecciona que tipo de nota deseas redactar')!!}<br>
                            {!!Form::label('Noticias','Noticias:')!!}                            
                            {!!Form::radio('tipo', '1')!!}
                            {!!Form::label('Evento','Evento:')!!}
                            {!!Form::radio('tipo', '2')!!}
                        </div>

                        @if($errors->has('tipo'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('tipo') }}              
                            </div>
                        @endif

                        <div class="form-group" id="tit">
                            {!!Form::label('Titulo','Titulo:')!!}
                            {!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Ingresa el titulo de la nota','required','autocomplete'=>'off'])!!}
                        </div>
                        @if($errors->has('titulo'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('titulo') }}              
                            </div>
                        @endif
                        <div class="form-group" id="subtit">
                            {!!Form::label('Subtitulo','Subtitulo:')!!}
                            {!!Form::text('subtitulo',null,['class'=>'form-control','placeholder'=>'Ingresa el Subtitulo de la nota','required','autocomplete'=>'off'])!!}
                            @if($errors->has('subtitulo'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('subtitulo') }}              
                            </div>
                            @endif
                        </div>
                        <div class="form-group" id="cat" >
                            {!!Form::label('Categorias','Categorias:')!!}
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Añadir mas</button>
                            <select class="form-control selectpicker" name="categoria" title="Selecciona una Categoria">
                            @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                            @endforeach
                            </select>    
                        </div>
                        @if($errors->has('categoria'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('categoria') }}              
                            </div>
                        @endif
                        <div class="form-group" id="status" >
                            {!!Form::label('Estado de la Nota','Estado de la Nota:')!!}
                            <select class="form-control selectpicker" name="statusNota" title="Selecciona una opcion">
                                <option value="1">Publicar y Guardar</option>
                                <option value="2">Guardar Borrador</option>                                
                            </select>    
                        </div>
                        @if($errors->has('statusNota'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('statusNota') }}              
                            </div>
                            @endif
                        <div class="form-group" id="hash">
                            {!!Form::label('Hashtags','Hashtags:')!!}
                           <select class="selectpicker form-control" name="tags[]" multiple='true' title="Selecciona las etiquetas relacionadas con esta nota" id="tags">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                            </select>                                                        
                        </div>
                             @if($errors->has('tags'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('tags') }}              
                            </div>
                            @endif

                        <div class="form-group" id="fec">
                            {!!Form::label('Fecha','Fecha:')!!}
                            {!! Form::text('datepicker', null, array('date-format'=>'yy-mm-dd','type' => 'text', 'class' => 'form-control date','placeholder' => 'Marca la fecha', 'id' => 'datepicker')) !!}
                        </div>
                             @if($errors->has('datepicker'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('datepicker') }}              
                            </div>
                            @endif
                        <div class="form-group" id="imgmain">
                            {!!Form::label('Subir imagen','Subir imagen:')!!}
                            {!!Form::file('imagen',['id'=>'imagen','accept'=>'image/x-png,image/gif,image/jpeg'])!!}
                        </div>
                            @if($errors->has('imagen'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('imagen') }}              
                            </div>
                            @endif
                        <div class="form-group" id="imgsec">
                            {!!Form::label('Subir imagenes Extras','Subir imagenes Extras:')!!}                            
                            {!!Form::file('imagensec[]', array('multiple'=>true)) !!}
                        </div>
                             @if($errors->has('imagensec'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('imagensec') }}              
                            </div>
                            @endif

                        <div class="form-group" id="not">
                            {!!Form::label('Nota','Registra la Nota')!!}
                            {!!Form::textarea('blog',null,['class' => 'form-control'])!!}
                        </div>                            

                        {!!Form::submit('Registrar',['class'=>'btn btn-lg btn-primary col-md-4','id'=>'btn'])!!}
                        {!!Form::close()!!}                        
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
            <div class="form-group" id="categoriamodal">
                            {!!Form::label('Cat','Categoria:')!!}
                            {!!Form::text('newCat',null,['class'=>'form-control','placeholder'=>'Ingresa la nueva categoria','required','autocomplete'=>'off'])!!}
                        </div>
                        <button id="btnNewCat" type="button" class="btn btn-default">AGREGAR   </button>                        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content');
    }
});

// POST
 $.post( "{{ route('notas.newcat') }}",
{
        nombre: "Donald Duck"
},
function(response) {
  console.log(response)
  alert( "success" );
})
  .done(function() {
    alert( "Hecho!" );
  })
  .fail(function() {
    alert( "error :c" );
  })
  .always(function() {
    alert( "Todo ha terminado no importa si hubo un error o no :)" );
  });

</script>



@endsection




