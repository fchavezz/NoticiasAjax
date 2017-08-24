<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upemor || Inicio</title>
    <!-- JQuery -->
    <script src="/noticias/js/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="/js/bootstrap.js"></script>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link rel="shortcut icon" href="http://www.upemor.edu.mx/favicon.ico" type="image/x-icon" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Estilos y eventos propios -->
    <link href="/css/index.css" rel="stylesheet">
    <script src="/js/index.js"></script>
    <!--
        Rojo:		#F50003
        Amarillo:	#FBB034
        Morado:	    #4F1F91
    -->
    <style>


    </style>



</head>
<body>
<header class="main-header" id="header">
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
</header>
@yield('content')

<!-- Pié de página -->
<div class="container-fluid">
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