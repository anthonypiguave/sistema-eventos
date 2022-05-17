<?php
    // Definir un nombre para cachear
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);

    // Definir archivo para cachear (puede ser .php también)
	$archivoCache = 'cache/'.$pagina.'.html';
	// Cuanto tiempo deberá estar este archivo almacenado
	$tiempo = 36000;
	// Checar que el archivo exista, el tiempo sea el adecuado y muestralo
	if (file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)) {
   	include($archivoCache);
    	exit;
	}
	// Si el archivo no existe, o el tiempo de cacheo ya se venció genera uno nuevo
	ob_start();
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Xenturion |
            <?php
            if ($pagina == 'index'){
                echo ucwords(strtolower('inicio'));
            }else{
                echo ucwords(strtolower($pagina));
            }
            ?>
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.png"/>
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/leaflet.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
        <link href="css/aos.css" rel="stylesheet">
        <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <?php
            $archivo = basename($_SERVER['PHP_SELF']);
            $pagina = str_replace(".php", "", $archivo);
            if($pagina == 'invitados' || $pagina == 'index'){
              echo '<link rel="stylesheet" href="css/colorbox.css">';
            } else if($pagina == 'conferencia') {
              echo '<link rel="stylesheet" href="css/lightbox.css">';
              echo '<link rel="stylesheet" href="css/glightbox.min.css">';
              echo '<link rel="stylesheet" href="css/swiper-bundle.min.css">';
            }
        ?>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css">
        <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    </head>
    <body class="<?php echo $pagina; ?>">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <section id="hero">
            <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
                <h1 class="mb-4 pb-0">XENTURION IT<br><span>Design</span> Conference</h1>
                <p class="mb-4 pb-0"><?php $fechaActual = date('d-M-Y'); echo $fechaActual;?>, Guayaquil, Ecuador</p>
                <a href="https://www.youtube.com/watch?v=iXcY5MgAi_0" class="glightbox play-btn mb-4"></a>
                <a href="calendario.php" class="about-btn scrollto">Acerca del Evento</a>
            </div>
        </section>
        <header id="header" class="d-flex align-items-center ">
            <div class="container-fluid container-xxl d-flex align-items-center">
                <div id="logo" class="me-auto">
                    <!-- Uncomment below if you prefer to use a text logo -->
                     <h1><a href="index.php">Xenturion<span>IT</span></a></h1>
<!--                    <a href="index.php" class="scrollto">-->
<!--                        <img src="../../img/logo.png" alt="" title="">-->
<!--                    </a>-->
                </div>
                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto" href="index.php">Inicio</a></li>
                        <li><a class="nav-link scrollto" href="conferencia.php">Conferencia</a></li>
                        <li><a class="nav-link scrollto" href="calendario.php">Calendario</a></li>
                        <li><a class="nav-link scrollto" href="invitados.php">Invitados</a></li>
                        <li><a class="nav-link scrollto" href="registro.php">Reservaciones</a></li>
                        <li><a class="nav-link scrollto" href="contacto.php">Contact</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header>
