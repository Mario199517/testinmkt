<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Proyecto en Git</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.css">
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center m-5">
                <div class="col-md-6">
                    <h4 class="text-center">No agarra el fetch de agus :v</h4>
                    <h5 class="text-center">HOLA MUNDO EN JAVA</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input id="uno" type="text" class="form-control" placeholder="introduce un numero" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input id="dos" type="text" class="form-control" placeholder="introduce un numero" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <select id="operacion" name="operacion" class="form-select" required>
                                    <option value="">Selecciona la operacion a realizar</option>
                                    <option value="suma">Sumar</option>
                                    <option value="resta">Restar</option>
                                    <option value="multiplicar">Multiplicar</option>
                                    <option value="dividir">Dividir</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input id="result" type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <button id="btn" class="btn btn-success w-100">Ver resultado</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <script src="vendors/bootstrap/js/bootstrap.js"></script>
        <script src="vendors/jquery/jquery.js"></script>

        <script>
            $(document).ready(function() {
                $("#btn").on('click', function(e) {
                    e.preventDefault();

                    var uno = $("#uno").val();
                    var dos = $("#dos").val();
                    var suma = parseInt(uno) + parseInt(dos);
                    $("#result").val(suma);
                    console.log("cambio");
                });

                $("#operacion").on('change', function(e) {
                    e.preventDefault();
                    var operacion = $(this).val();
                    var uno = $('#uno').val();
                    var dos = $("#dos").val();

                    if(uno == '' || dos == ''){
                        alert('Bro, ingresa primero los numeros');
                        return false;
                    }else{

                        switch (operacion) {
                            case 'suma':
                                    var resultado = parseInt(uno) + parseInt(dos);    
                            break;

                            case 'resta':
                                var resultado = parseInt(uno) - parseInt(dos);    
                            break;

                            case 'multiplicar':
                                var resultado = parseInt(uno) * parseInt(dos);    
                            break;

                            case 'dividir':
                                var resultado = parseInt(uno) / parseInt(dos);    
                            break;

                            default:
                                break;
                        }
                    }   
                    $("#result").val(resultado);
                    console.log("cambio");
                });
            });
        </script>
    </body>
</html>