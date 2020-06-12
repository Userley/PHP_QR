<?php
include('head.php');
$Cn = mysqli_connect("localhost", "root", "", "ambgesbd") or die("Conexión errada!");


if (isset($_POST["enviar"])) {
    $modelo = $_POST["modelo"];
    $file = $HTTP_POST_FILES['imgfile']['tmp_name'];
    $Query = mysqli_query($Cn, "INSERT INTO certificado (Modelo,img) VALUES ('" . $modelo . "','" . $file . "')");
    if ($Query) {
        echo "<script type='text/javascript'>alert('Se ingresó el registro!');</script>";
    } else {
        echo "<script type='text/javascript'>alert('No se pudo registrar!');</script>";
    }
}

?>
<section style="margin-top: 100px;">

    <main class="container-fluid">
        <form action="" method="POST">
            <div class="row justify-content-md-center mt-5">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Ingrese datos de Certificados
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="modelo">Nombre Certificado</label>
                                        <input type="text" name="modelo" id="modelo" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="imgfile">Selecciona Imágen:</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="imgfile" name="imgfile">
                                            <label class="custom-file-label" for="imgfile">Buscar...</label>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <label for="">Imágen</label></br>
                                        <img src="" alt="" id="img" width="450" style="border:1px solid #BDBDBD; box-shadow: 0px 15px 15px -6px black;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="btn-group">
                                <input type="submit" name="enviar" class="btn btn-success" value="+ Guardar">
                                <input type="button" class="btn btn-danger" value=" Cancelar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
</section>

<?php

include('footer.php');

?>