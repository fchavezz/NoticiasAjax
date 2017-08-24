<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Upemor || Inicio</title>


    <!-- JQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="shortcut icon" href="http://www.upemor.edu.mx/favicon.ico" type="image/x-icon" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Estilos y eventos propios -->
    <link href="css/index.css" rel="stylesheet">
    <script src="js/index.js"></script>
    <!--
        Rojo:		#F50003
        Amarillo:	#FBB034
        Morado:	    #4F1F91
    -->



</head>
<body>


<!-- Barra de navegación -->
<?php $contador = 1;?>
<nav id="menu-principal" class="navbar navbar-default navbar-fixed-top ">


    <table  width="100%">
        <tr>
            <td width="93%">
                <table  width="100%">
                    <tr>
                        <td id="marcorojo"></td>
                        <td style="color:#4F1F91;" id="marcoamarillo">
                            <?php
                            $contador = "";
                            if(!$contador)
                                $contador = 0;

                            if($contador == 1){
                                echo "N° Visitas:";
                                $fp = fopen("contador.txt","r");
                                $visitas = intval(fgets($fp));
                                $visitas++;
                                fclose($fp);
                                $fp = fopen("contador.txt","w");
                                fputs($fp,$visitas);
                                echo $visitas;
                            }else{
                                echo "Upemor";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
                <table  width="100%" align="center">
                    <tr id="marco">
                        <td >Universidad Politécnica del Estado de Morelos</td>
                    </tr>
                    <tr id="marcox"  >
                        <td style="text-align: center;">Upemor</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <div class="container-fluid" id="margen">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <table width = '100%'>
                                        <tr>
                                            <td width="90%" id="marco1">
                                                Upemor
                                            </td>
                                            <td width="10%">
                                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </td>
                                        </tr>
                                    </table>

                                    <!-- <a class="navbar-brand" href="#"><img alt="Brand" src="sitio_web/img/formamos_profesionistas.jpg" height="100%" /></a> -->
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="http://www.upemor.edu.mx/">Inicio <span class="sr-only">(current)</span></a></li>

                                        <li class="dropdown">
                                            <a id="titulo" href="#" class="dropdown-toggle titulo" data-toggle="dropdown" role="button" aria-expanded="false">Oferta educativa<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="http://www.upemor.edu.mx/oferta_educativa/oferta_educativa_administracion.php">Licenciatura en Administración y Gestión</a></li>
                                                <li class="divider"></li>
                                                <li><a href="http://www.upemor.edu.mx/oferta_educativa/oferta_educativa_biotecnologia.php">Ingeniería en Biotecnología</a></li>
                                                <li><a href="http://www.upemor.edu.mx/oferta_educativa/oferta_educativa_ambiental.php">Ingeniería en Tecnología Ambiental</a></li>
                                                <li><a href="http://www.upemor.edu.mx/oferta_educativa/oferta_educativa_industrial.php">Ingeniería en Industrial</a></li>
                                                <li><a href="http://www.upemor.edu.mx/oferta_educativa/oferta_educativa_informatica.php">Ingeniería en Informática</a></li>
                                                <li><a href="http://www.upemor.edu.mx/oferta_educativa/oferta_educativa_electronica.php">Ingeniería en Electrónica y Telecomunicaciones</a></li>
                                                <li><a href="http://www.upemor.edu.mx/oferta_educativa/oferta_educativa_financiera.php">Ingeniería en Financiera</a></li>
                                                <li class="divider"></li>
                                                <li><a href="http://www.upemor.edu.mx/oferta_educativa/oferta_educativa_maestria_ensenanza.php">Maestría en Enseñanza de las Ciencias</a></li>
                                                <li><a href="http://www.upemor.edu.mx/oferta_educativa/oferta_educativa_maestria_tecnologias.php">Maestría en Tecnologías de la Información</a></li>
                                                <li><a href="http://www.upemor.edu.mx/oferta_educativa/oferta_educativa_maestria_finanzas.php">Maestría en Finanzas y Gestión</a></li>
                                                <li><a href="http://www.upemor.edu.mx/oferta_educativa/oferta_educativa_maestria_ciencias.php">Maestría en Ciencias en Biotecnología</a></li>
                                            </ul>
                                        </li>

                                        <li class="titulo"><a href="http://www.upemor.edu.mx/nosotros/">Nosotros</a></li>

                                        <li class="dropdown">
                                            <a id="titulo" href="#" class="dropdown-toggle titulo" data-toggle="dropdown" role="button" aria-expanded="false">Transparencia<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="http://www.transparenciamorelos.mx/otis/UPEMOR">Transparencia Upemor</a></li>
                                                <li><a href="http://sie.sytes.net/sie/">Solicitud de información</a></li>
                                                <li><a href="http://www.imipe.org.mx/">IMIPE</a></li>
                                                <li class="divider"></li>
                                                <li><a href="http://www.upemor.edu.mx/transparencia/armonizacion.php">Armonización contable</a></li>
                                                <li><a href="http://www.upemor.edu.mx/transparencia/pash.php">Nivel financiero PASH</a></li>
                                            </ul>
                                        </li>
                                        <li class="titulo"><a href="http://www.upemor.edu.mx/buzon">Buzón</a></li>
                                        <li class="titulo"><a href="http://www.upemor.edu.mx/sitios-de-interes/">Sitios de interés</a></li>
                                        <li class="titulo"><a href="http://enlinea.upemor.edu.mx/">Plataforma virtual</a></li>
                                        <li class="dropdown">
                                            <a id="titulo" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SII <span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="http://siintranet.upemor.edu.mx/">Profesores</a></li>
                                                <li class="divider"></li>
                                                <li><a href="http://siintranet.upemor.edu.mx/">Administrativos</a></li>
                                                <li class="divider"></li>
                                                <li><a href="http://siintranet.upemor.edu.mx/">Académicos</a></li>
                                                <li class="divider"></li>
                                                <li><a href="http://sii.upemor.edu.mx/">Alumnos</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </td>
                    </tr>
                </table>
            </td>
            <td id="imagen"><div><img class="logo" src="http://www.upemor.edu.mx/sitio_web/img/LOGO_U4.png"  /></div></td>
            <td  id="imagen2"><div ><img class="logo1" src="http://www.upemor.edu.mx/sitio_web/img/LOGO_U5.png"  /></div></td>

        </tr>

    </table>

</nav>
<!-- /.Barra de navegación -->




<!-- Slider principal -->
<div id="myCarouselPrin" class="carousel slide" data-interval="3000" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarouselPrin" data-slide-to="0" class="active"></li>
        <li data-target="#myCarouselPrin" data-slide-to="1"></li>
        <li data-target="#myCarouselPrin" data-slide-to="2"></li>
        <li data-target="#myCarouselPrin" data-slide-to="3"></li>
        <li data-target="#myCarouselPrin" data-slide-to="4"></li>
        <li data-target="#myCarouselPrin" data-slide-to="5"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">

        <div class=" active item">
            <a href="http://www.upemor.edu.mx/admisiones/licenciatura.php"><img src="sitio_web/img/slider-prin/30.png" alt="Chania"></a>
            <!-- <div class="carousel-caption">
              <h3>Second slide label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div> -->
        </div>
        <div class="item">
            <img src="img/slider-prin/1.jpg" alt="Chania">
            <!-- <div class="carousel-caption">
              <h3>Second slide label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div> -->
        </div>
        <div class="item">
            <img src="img/slider-prin/3.jpg" alt="Chania">
            <!-- <div class="carousel-caption">
              <h3>Third slide label</h3>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div> -->
        </div>
        <div class="item">
            <img src="img/slider-prin/4.jpg" alt="Chania">
            <!-- <div class="carousel-caption">
              <h3>First slide label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div> -->
        </div>
        <div class="item">
            <img src="img/slider-prin/5.jpg" alt="Chania">
            <!-- <div class="carousel-caption">
              <h3>Second slide label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div> -->
        </div>
        <div class="item">
            <img src="img/slider-prin/6.jpg" alt="Chania">
            <!-- <div class="carousel-caption">
              <h3>Third slide label</h3>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div> -->
        </div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarouselPrin" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarouselPrin" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<!-- /.Slider principal -->









<!-- Quienes somos -->
<div class="container-fluid">
    <div class="row" id="fila-seccion-quienes-somos">
        <div class="col-md-2 col-sm-4">¿Quiénes somos?</div>
        <div class="col-md-2 col-sm-4">Misión</div>
        <div class="col-md-2 col-sm-4">Visión</div>
        <div class="col-md-2 col-sm-4">Política integral de calidad</div>
        <div class="col-md-2 col-sm-4">Política equidad de género</div>
        <div class="col-md-2 col-sm-4">Nuestros valores éticos</div>
    </div>
    <div class="row" id="fila-seccion-quienes-somos-explicacion" style="display:none;">
        <div class="col-md-12">
            <p>
                <b>¿Quiénes somos?</b><br />
                Somos una institución de educación superior comprometida en promover y lograr la igualdad de oportunidades entre hombres y mujeres y la no discriminación en el acceso a la educación y al empleo.<br />

                <br />
                <b>Misión</b><br />
                Formar profesionistas integrales; potencializando sus competencias, fortaleciendo los valores institucionales y contribuyendo al desarrollo de los diversos sectores de la sociedad.<br />

                <br />
                <b>Visión</b><br />
                En el 2018: Ser la primera opción educativa de Enseñanza Superior en la región.<br />

                <br />
                <b>Política integral de calidad</b><br />
                "Somos una institución de educación superior comprometida con la equidad, la calidad educativa, la prevención de la contaminación y la protección del ambiente, así como la seguridad de nuestra comunidad universitaria, para la formación de profesionistas mediante la generación, aplicación y difusión del conocimiento, la investigación aplicada y la cultura; con una visión de mejora continua y sustentabilidad, asegurando el cumplimiento de la legislación aplicable".<br /> Upemor cuenta con las certificaciones académicas de CIEES y CACEI, así como ISO 9001:2008. Somos una Sociedad Ambiental certificada en ISO 14001 – 2004 y Calidad Ambiental de PROFEPA<br>
                <img width = "150" src="http://www.upemor.edu.mx/images/logos_certificaciones.png">

                <br />
                <br>
                <b>Política de equidad de género</b><br />
                En el 2015: Ser la primera opción educativa de Enseñanza Superior en la región.<br />

                <br />
                <b>Nuestros valores éticos</b><br />
            <ul>
                <li>Honestidad</li>
                <li>Responsabilidad</li>
                <li>Solidaridad</li>
                <li>Actitud positiva hacia la vida</li>
                <li>Calidad de vida</li>
            </ul>

            </p>
        </div>
    </div>
</div><!-- /.Quienes somos -->




<!-- Noticias y eventos -->
<div class="container-fluid">
    <div class="row" id="fila-seccion-noticias-y-eventos">
        <div class="col-md-12">Noticias y eventos</div>
    </div>
    <div class="row" id="fila-seccion-noticias-y-eventos-secciones">
        <div class="col-md-3 col-sm-6">
            Noticias<br />
            <a href ="/noticias"><img src="sitio_web/img/noticias/portada-redes-sociales.jpg" alt="Redes sociales" class="img-thumbnail"></a>
        </div>
        <div class="col-md-3 col-sm-6">
            Revista<br />
            <a href ="noticias/gaceta-influencia-politecnica.php"><img src="sitio_web/img/noticias/portada-revista.jpg" alt="Revista" class="img-thumbnail"></a>
        </div>
        <!--  <div class="col-md-3 col-sm-6">
              Artículos periodísticos<br />
              <a href ="noticias/articulos-periodisticos.php"><img src="sitio_web/img/noticias/portada-prensa.jpg" alt="Prensa" class="img-thumbnail"></a>
          </div> -->
        <div class="col-md-3 col-sm-6">
            Eventos<br />
            <a href ="/eventos"><img src="sitio_web/img/noticias/05012016-eventos.jpg" alt="Prensa" class="img-thumbnail"></a>
        </div>
        <div class="col-md-3 col-sm-6">
            Avisos y convocatorias<br />
            <a href ="noticias/avisosyconvocatorias.php"><img src="sitio_web/img/noticias/portada-avisos.jpg" alt="Avisos" class="img-thumbnail"></a>
        </div>
    </div>
</div><!-- /.Noticias y eventos -->








<!-- Secciones principales de página web -->
<div class="container-fluid">
    <div class="row" id="fila-seccion-paginas-principales">
        <div class="col-md-6" id="fila-seccion-paginas-principales-primera-columna">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3><a>Admisiones</a></h3>
                    <a class="link" href="admisiones/licenciatura.php">- Convocatoria licenciatura</a><br />
                    <a class="link" href="admisiones/maestria.php">- Convocatoria maestría</a>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h3><a href="http://www.upemor.edu.mx/oferta_educativa_vinculacion/oferta-educativa.html">Oferta educativa</a></h3>
                    <a class="link" href="http://www.upemor.edu.mx/oferta_educativa_vinculacion/oferta-educativa.html#biotecnologia">- Licenciatura e Ingeniería</a><br />
                    <a class="link" href="http://www.upemor.edu.mx/oferta_educativa_vinculacion/oferta-educativa.html#posgrados">- Maestría</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3><a href="becas">Becas</a></h3>
                    <a class="link" href="becas/licenciatura.php#BecasUpemor">- Internas</a><br />
                    <a class="link" href="becas/licenciatura.php#Becasexternas">- Externas</a><br />
                    <a class="link" href="documentos/2015/septiembre/BSU_2015-2016.pdf" target="_blank">- Beca salario</a><br />
                    <a class="link" href="becas/reglamento.php">- Reglamento</a>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h3><a href="#">Investigación</a></h3>
                    <a class="link" href="#">- Líneas de investigación</a><br />
                    <a class="link" href="#">- Cuerpos académicos</a><br />
                    <a class="link" href="#">- Artículos científicos</a><br />
                    <a class="link" href="#">- Alianzas</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3><a href="escolares">Servicios Escolares</a></h3>
                    <a class="link" href="escolares/aspirantes_licenciatura/requisitos.php">- Aspirantes</a><br />
                    <a class="link" href="escolares/alumnos_licenciatura/horarios.php">- Alumnos</a><br />
                    <a class="link" href="escolares/docentes/acceso_intra.php">- Docentes</a><br />
                    <a class="link" href="escolares/aspirantes_licenciatura/inscripciones.php">- Inscripciones</a><br />
                    <a class="link" href="escolares/alumnos_licenciatura/calendario.php">- Calendario escolar</a><br />
                    <a class="link" href="escolares/alumnos_licenciatura/cuotas.php">- Cuotas</a><br />
                    <a class="link" href="escolares/alumnos_licenciatura/tramites_fichas.php">- Trámites de titulación</a>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h3><a href="posgrados">Posgrado y educación continua</a></h3>
                    <a class="link" href="#">- Centro de idiomas</a><br />
                    <a class="link" href="#">- Diplomados</a><br />
                    <a class="link" href="#">- Cursos</a><br />
                    <a class="link" href="posgrados/maestria_profesionalizantes.php">- Maestría</a><br />
                    <a class="link" href="posgrados/">- Convocatorias</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3><a href="#">Legislación</a></h3>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h3><a href="#">Seguridad e higiene</a></h3>
                </div>
            </div>
        </div>
        <div class="col-md-6" id="fila-seccion-paginas-principales-foto-derecha">&nbsp;</div>
    </div>
</div><!-- /.Secciones principales de página web -->








<!-- Secciones de visítanos -->
<div class="container-fluid">
    <div class="row" id="fila-seccion-visitanos">
        <div class="col-md-4" id="fila-seccion-visitanos-izquierda">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.9266937402963!2d-99.14151400000007!3d18.890333000000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce743592c7b4a3%3A0x33c5f106f173bb4e!2sUpemor!5e0!3m2!1ses!2sus!4v1424375847971" width="100%" height="450" frameborder="0" style="border:0" id="mapa-upemor"></iframe>
        </div>
        <div class="col-md-8"  id="fila-seccion-visitanos-derecha">
            <div class="row">
                <div class="col-md-10 col-sm-10">
                    <h1>Visítanos</h1>
                    Puedes visitarnos en un horario de 9:00 a.m. a 7:00 p.m.
                    <ul>
                        <li>Entrevistas</li>
                        <li>Instalaciones</li>
                        <li>Oferta educativa</li>
                        <li>Asuntos estudiantiles</li>
                        <li>Bolsa de trabajo</li>
                        <li>Plantilla de personal</li>
                        <li>Espacios 100% libres de humo</li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2" id="fila-seccion-visitanos-derecha-iconos">
                    <img src="sitio_web/img/seccion-visitanos/facebook.fw.svg" width="40" />
                    <img src="sitio_web/img/seccion-visitanos/twitter.svg" width="40" />
                </div>
            </div>
        </div>
    </div>
</div><!-- /.Secciones de visítanos -->







<!-- Pié de página -->
<div class="container-fluid">
    <div class="row" id="fila-pie-pagina-iconos">
        <div class="col-md-12">

            <a href="http://www.upemor.edu.mx/documentos/2015/diciembre/FALLO SERVICIOS 2016.pdf" target="_blank"><img src="img/prin/fallo2016.png" height="80%" style="border:none; max-width:100%;"></a>
            &nbsp;&nbsp;
            <a href="http://www.upemor.edu.mx/documentos/2015/noviembre/BASES DE CONVOCATORIA.pdf" target="_blank"><img src="img/prin/licitación3.png" height="80%" style="border:none; max-width:100%;"></a>
            &nbsp;&nbsp;

            <a href="http://www.upemor.edu.mx/documentos/2015/febrero/AVISO_DE_CONFIDENCIALIDAD_DE_LA_UPEMOR.pdf" target="_blank"><img src="img/prin/aviso_confidencialidad.png" height="80%" style="border:none; max-width:100%;"></a>
            &nbsp;&nbsp;
            <a href="http://servicioshacienda.morelos.gob.mx:8080/secontraloria/" target="_blank"><img src="img/prin/buzon_ciudadano.jpg" height="80%" style="border:none; max-width:100%;"></a>
            &nbsp;&nbsp;
            <img src="img/oficial/certificaciones.jpg" height="40"  style="border:none;">
            &nbsp;&nbsp;
            <a href="http://www.sep.gob.mx/" target="_blank"><img src="img/oficial/sep.jpg" height="50"  style="border:none;"></a>
            &nbsp;&nbsp;
            <!--<a href="https://es-es.facebook.com/gracoramirezg/app_174225559282949" target="_blank">
            <img src="img/oficial/nuevavision.jpg" height="50" style="border:none;">
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
            <a href="http://www2.morelos.gob.mx/portal/" target="_blank">
                <img src="img/oficial/Escudo.jpg" height="50" style="border:none;">
            </a>&nbsp;&nbsp;
            <img src="img/oficial/sociedadAmbiental.jpg" height="40"  style="border:none;">
            <!--
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="http://www.inegi.org.mx/est/contenidos/proyectos/ce/ce2014/default.aspx" target="_blank"><img src="img/oficial/banner_censos.jpg" height="100%" style="border:none; max-width:100%;"></a>
            -->
            &nbsp;&nbsp;
            <a href="http://www.conricyt.mx/" target="_blank"><img src="img/prin/conricyt.png" height="80%" style="border:none; max-width:100%;"></a>
            &nbsp;&nbsp;
            <a href="http://www.cnbes.sep.gob.mx/" target="_blank"><img src="img/prin/cnbes.jpg" height="80%" style="border:none; max-width:100%;"></a>
            &nbsp;&nbsp;
            <a href="http://www.upemor.edu.mx/documentos/2015/febrero/InvitacionVersionFinalJPG.jpg" target="_blank"><img src="img/oficial/beca_salario.jpg" height="80%" style="border:none; max-width:100%;"></a>
            &nbsp;&nbsp;
            <a href="http://www.prepaenlinea.sep.gob.mx" target="_blank"><img src="img/oficial/banners-03.gif" height="80%" style="border:none; max-width:100%;"></a>
        </div>
    </div>
    <div class="row" id="fila-pie-pagina">
        <div class="col-md-12">
            <address>
                <strong>Dirección:</strong> Boulevard Cuauhnáhuac #566, Col. Lomas del Texcal, Jiutepec, Morelos. CP 62550&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>Tel:</strong> (777) 229-3500 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>Email:</strong> informes@upemor.edu.mx
            </address>
        </div>
    </div>
</div><!-- /.Pié de página -->




</body>
</html>