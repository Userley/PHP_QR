<?php
include('head.php');
?>
<style>
    .borde {
        border: 1px solid #BDBDBD !important;
    }
</style>
<section id="portfolio" class="portfolio">
    <main class="container-fluid">
        <form action="" method="POST">
            <div class="row justify-content-md-center mt-5">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <span><strong>
                                    <h5>Ingrese datos del participante.</h5>
                                </strong></span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="nombres">Nombres:</label>
                                        <input type="text" name="nombres" id="nombres" class="form-control">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="apellidos">Apellidos:</label>
                                        <input type="text" name="apellidos" id="apellidos" class="form-control">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class=" form-group">
                                        <label for="dni">DNI:</label>
                                        <input type="number" name="dni" id="dni" class="form-control">
                                    </div>

                                </div>
                                <div class="col-lg-3">
                                    <div class=" form-group">
                                        <label for="Celular">Celular:</label>
                                        <input type="number" name="Celular" id="Celular" class="form-control">
                                    </div>

                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="Email">E-mail:</label>
                                        <input type="email" name="Nombre" id="Nombre" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="FechaEmi">Fecha de Emisión:</label>
                                        <input type="date" name="FechaEmi" id="FechaEmi" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="certificados">Certificados:</label></br>
                                                <select class="selectpicker" data-live-search="true" id="cetificados" data-style="borde" title="Seleccione...">
                                                    <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                                    <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                                    <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="img">Imágen:</label><br>
                                                <img src="assets\img\imgvacia.jpg" alt="Pre-visualización" width="" id="img" style="border: 1px solid gray;">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="btn-group">
                                                    <input type="button" value="+ Guardar" width="80%" class="btn btn-success" id="submint">
                                                    <input type="button" class="btn btn-danger" width="80%" value="Cancelar">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
</section>