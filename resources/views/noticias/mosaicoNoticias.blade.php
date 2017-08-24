@extends('complementos.header')
@section('content')

    <div class="container maincaja" style="margin-top:100px">
        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-md-8">                           
                @foreach($principalNoticias as $prin)
                    <img class="img-responsive" src="/imgnoticas/{{$prin->url_picture}}" alt="" style="width: 750px;height: 520px;">
                    <h3>
                        <a href="noticias/{{$prin->tit}}">{{$prin->title}}</a>
                    </h3> 
                @endforeach
            </div>

            <div class="col-md-4">                
                <div class="panel">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>                
                </div>
                @foreach($secundariasNoticias as $sec)
                    <div class="panel">                                              
                        <a href="#">
                            <img class="img-responsive portfolio-item" src="/imgnoticas/{{$sec->url_picture}}" alt=
                            "" style="width: 320px;height: 200px;">
                            <!--500x300-->
                        </a>
                        <h3>
                          <a href="noticias/{{$sec->tit}}">{{$sec->title}}</a>
                        </h3> 
                    </div>                    
                @endforeach
            </div>

            <div class="col-lg-12">
            <h3 class="page-header">Lo Ultimo</h3> 
                @foreach($ultimasNoticias as $noticia)                               
                    <div class="col-md-3 panel">
                        <a href="#">
                            <img class="img-responsive portfolio-item" src="/imgnoticas/{{$noticia->url_picture}}" alt="" style="width: 320px;height: 150px;">
                        </a>
                        <h3>
                            <a href="noticias/{{$noticia->tit}}">{{$noticia->title}}</a>
                        </h3> 
                    </div>
                    @endforeach                    
                </div>

                
                    <div class="panel">                    
                        <h3>Síguenos</h3>
                        <hr>
                        <div id="botones-social" class="center-block">
                            <a href="URL DE TU RED SOCIAL"><img src="/img/facebook.png" alt="" class="redesi" id="fb"></a>
                            <a href="URL DE TU RED SOCIAL"><img src="/img/instagram.png" alt="" class="redesi" ></a>
                            <a href="URL DE TU RED SOCIAL"><img src="/img/twitter.png" alt="" class="redesi" ></a>
                        </div>
                        </div>
                

                
            </div>
        </div>
    </div>

            
        
       

     
@endsection

