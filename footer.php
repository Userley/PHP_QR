<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Location</h4>
                <p>2215 John Daniel Drive<br>Clark, MO 65243</p>
            </div>
            <div class="col-md-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase">Around the Web</h4>
                <ul class="list-inline">
                    <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
                    <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-google-plus fa-fw"></i></a></li>
                    <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
                    <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-dribbble fa-fw"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="text-uppercase mb-4">About Freelancer</h4>
                <p class="lead mb-0"><span>Freelance is a free to use, open source Bootstrap theme.&nbsp;</span></p>
            </div>
        </div>
    </div>
</footer>
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright ©&nbsp;AMBGES Certificate 2018</small></div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script>
    var file = "";

    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        var file_extension = $(this).val().split('.').pop();
        file = $(this).val();
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
</body>


</html>