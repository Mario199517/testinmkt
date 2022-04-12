<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>_TEST con GIT</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.css">
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-md-6">
                    <h1>No agarra el fetch de agus :v</h1>
                    <h2>HOLA MUNDO EN JAVA</h2>
                        <input id="uno" type="text" class="form-control">
                        <input id="dos" type="text" class="form-control">
                        <input id="result" type="text" class="form-control">
                        <button id="btn" class="btn btn-primary">Ver resultado</button>
                </div>
            </div>
        </div> 

        <script src="vendors/bootstrap/js/bootstrap.js"></script>
        <script src="vendors/jquery/jquery.js"></script>

        <script>
            $(document).ready(function() {
                $("#btn").on('click', function() {
                    var uno = $("#uno").val();
                    var dos = $("#dos").val();
                    var suma = parseInt(uno) + parseInt(dos);
                    $("#result").val(suma);
                    console.log("cambio");
                });
            });
        </script>
    </body>
</html>