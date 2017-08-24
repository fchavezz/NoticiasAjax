@extends('complementos.header')
@section('content')
    
 <style type="text/css">
        p{
            text-align: justify;
        }
    </style>
@foreach($noticiasInfo as $info)
<meta property="og:image" content="/imgnoticas/{{$info->url_picture}}"/>
    <meta property="og:title" content="{{$info->title}}"/>
    <meta property="og:description" content="{{$info->subtitle}}"/>
    <meta property="og:url" content="http://www.upemor.com.mx/noticias/{{$info->slug}}"/>
    <meta property="og:site_name" content="UPEMOR"/>
    <meta property="og:type" content="company"/>


    <div class="container maincaja" style="margin-top:100px">
        <div class="row">
            <!-- Blog Post Content Column -->
            <div class="col-lg-12">
                <!-- Preview Image -->
                <div class="row">

                <div class="col-md-4 col-md-offset-8">
                    <div class="input-group">
                        <a href="busqueda"><input type="text" class="form-control" placeholder="Buscar"></a>
                        <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
                    </div>
                </div>
                </div>
                
                <div class="thumbnail text-left pull-left" style="margin-top:10px">
                    <img class="img-responsive" src="/imgnoticas/{{$info->url_picture}}" alt="" style="width:1200px;height:600px">
                    <div class="caption">
                        <h2 class="tit">{{$info->title}}</h2>
                        <p>{{$info->subtitle}}<br>
                        {{$info->dateposted}}
                            <!--Por: Francisco Chavez--></p>
                            
                    </div>
                </div>

                <hr>
            </div>
            <div class="col-lg-8">
                {!!html_entity_decode($info->content)!!}

            </div>
            @endforeach
            <div class="col-lg-12">
                <br>
                @foreach($noticiasTags as $tags)
                <a class="btn btn-default" href="#" role="button">{{$tags->name}}</a>
                @endforeach
                <hr>
            </div>

            <div class="col-lg-12">
                <h3>Lo último</h3>
                @foreach($ultimasNoticias as $noticia)       
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <img class="img-responsive portfolio-item sig" src="/imgnoticas/{{$noticia->url_picture}}" alt="" style="width: 320px;height: 150px;">
                    <div class="captionn">
                        <h4><a href="{{$noticia->tit}}">{{$noticia->title}}</a></h4>
                    </div>
                </div>
                @endforeach 

            <div class="col-lg-12 center-block">
                <h3>Síguenos</h3>
                <div id="botones-social" class="center-block">
                    <a href="https://web.facebook.com/upemoroficial/"><img src="/img/facebook.png" alt="" class="redesi" id="fb"></a>
                    <a href="URL DE TU RED SOCIAL"><img src="/img/instagram.png" alt="" class="redesi" ></a>
                    <a href="URL DE TU RED SOCIAL"><img src="/img/twitter.png" alt="" class="redesi" ></a>
                </div>
            </div>

        </div>
        <!-- /.row -->
        <hr>
    </div></div>
    <!-- /.container -->
    <!-- Footer -->

   

@endsection

