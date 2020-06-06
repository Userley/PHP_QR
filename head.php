<?php
$link = $_SERVER["REQUEST_URI"];

$activo1 = "";
$activo2 = "";
$activo3 = "";

switch ($link) {
    case '/php_qr/':
    case '/php_qr/reportes.php':
    case '/php_qr/cargadatos.php':
        $activo1 = "active";
        break;
    case '/php_qr/configurarcertificados.php':
        $activo2 = "active";
        break;
    case '/php_qr/acerca.php':
        $activo3 = "active";
        break;
    default:
        break;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - php_qr Certificate</title>
    <meta name="description" content="Configuración de certificado por capacitación php_qr">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bootstrap-select/css/bootstrap-select.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="/php_qr/">AMBGES Certificate</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger <?php echo $activo1; ?>" href="/php_qr">INICIO</a></li>
                    <li class="nav-item mx-0 mx-lg-1 " role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger <?php echo $activo2; ?>" href="/php_qr/configurarcertificados.php">CERTIFICADOS</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger <?php echo $activo3; ?>" href="/php_qr/acerca.php">ACERCA</a></li>
                </ul>
            </div>
        </div>
    </nav>