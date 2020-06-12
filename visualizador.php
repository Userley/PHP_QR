<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
    .texto {
        position: absolute;
        margin-top: 550px;
        margin-left: 25%;
        color: white;
        font-size: 30px;
    }
</style>

<body>
    <?php
    $rutaimg = "assets/img/certificados/wallhaven.jpg";
    $texto = "AMBGES, empresa validada por el ministerio de salud y cultura."
    ?>
    <section>
        <span class="texto"><?php echo $texto; ?></span>
        <img src="<?php echo $rutaimg; ?>" alt="" width="100%">
    </section>

</body>

</html>