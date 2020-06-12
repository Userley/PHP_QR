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
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- needs for bootstrap-select -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.js"></script>

<!-- bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- bootstrap-select additional library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.17/css/bootstrap-select.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.17/js/bootstrap-select.min.js"></script>


</head>

<body>

    <nav class="navbar fixed-top navbar-dark bg-dark text-uppercase navbar-expand-lg">
        <a class="navbar-brand" href="#">AMBGES Certificate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1 <?php echo $activo1; ?>">
                    <a class="nav-link h5" href="/php_qr">INICIO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-0 mx-lg-1 <?php echo $activo2; ?>">
                    <a class="nav-link h5" href="/php_qr/configurarcertificados.php">CERTIFICADOS</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1 <?php echo $activo3; ?>">
                    <a class="nav-link h5" href="/php_qr/acerca.php">ACERCA</a>
                </li>
            </ul>
        </div>
    </nav>