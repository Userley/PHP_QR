<?php
include('head.php');
?>
<section id="portfolio" class="portfolio">

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
                                            <input type="file" class="custom-file-input" id="imgfile">
                                            <label class="custom-file-label" for="imgfile">Buscar...</label>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <label for="">Imágen</label></br>
                                        <img src="" alt="" id="img" width="450">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="btn-group">
                                <input type="button" class="btn btn-success" value="+ Guardar">
                                <input type="button" class="btn btn-danger" value=" Cancelar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
</section>

<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        var file_extension = $(this).val().split('.').pop();
        if (file_extension == "png" || file_extension == "jpg" || file_extension == "JPG" || file_extension == "PNG") {
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            readImage(this);
        } else {
            alert("Extension no válida.");
        }
    });


    function readImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#img').attr('src', e.target.result); // Renderizamos la imagen
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // $("#imgfile").change(function() {
    //     // Código a ejecutar cuando se detecta un cambio de archivO
    //     readImage(this);
    // });
</script>