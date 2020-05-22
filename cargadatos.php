<?php
include('head.php');
?>
<section id="portfolio" class="portfolio">
    <div class="container-fluid">
        <form action="" method="POST">
            <div class="row justify-content-md-center mt-5">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <span><strong>
                                    <h5>Ingrese datos del participante.</h5>
                                </strong></span>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Nombre">Nombre Completo:</label>
                                <input type="text" name="Nombre" id="Nombre" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class=" form-group">
                                        <label for="Celular">Celular:</label>
                                        <input type="number" name="Celular" id="Celular" class="form-control">
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="Email">E-mail:</label>
                                        <input type="email" name="Nombre" id="Nombre" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="FechaEmi">Fecha de Emisión:</label>
                                        <input type="date" name="FechaEmi" id="FechaEmi" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Nombre">Descripción de Certificado:</label>
                                <textarea name="descripcion" id="descripcion" cols="80" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="button" value="+ Guardar" width="80%" class="btn btn-success" id="submint">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="button" class="btn btn-danger" width="80%" value="Cancelar">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            Texto de Prueba
                        </div>
                    </div>
                </div>
                <div class="col-12"></div>
            </div>
        </form>
    </div>
</section>