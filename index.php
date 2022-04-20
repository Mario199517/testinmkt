<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Proyecto en Git</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
        <style>
            .form-input{
                border-radius: 0;
                border: none;
                border-bottom: 2px solid #d9d9d9;
            }

            .form-input:hover{
                border-color: #6f6f6f;
            }

            .form-input:focus, .form-input:active, .form-input:focus-visible{
                box-shadow: none;
                border-color: #9b9b9b;
            }

            .form-button{
                border-radius: 0;
                background: #204bce;
                color: #fff;
                font-size: 17px;
                padding: 6px 6px;
            }

            .form-button:hover{
                background: #5979f9;
                color: #fff;
                box-shadow: 0px 2px 5px #5979f9;
            }

            .form-button:focus, .form-button:active .form-button:focus-visible{
                box-shadow: none;
            }
        </style>
    </head>
    <body>
        <header class="header-principal">
            <div class="container">

            </div>
        </header>
        <div class="container">
            <div class="d-flex justify-content-center m-5">
                <div class="col-md-6">
                    <h4 class="text-center">ESTO ES LA PELEA DEL SIGO (RICH VS EL DONAS) - EL BATO :V - LA QUIERE LLEVAR A KARI MARTE</h4>
                    <h5 class="text-center">HOLA MUNDO EN JAVA</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input id="uno" type="text" class="form-control form-input" placeholder="introduce un numero" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input id="dos" type="text" class="form-control form-input" placeholder="introduce un numero" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <select id="operacion" name="operacion" class="form-select form-input" required>
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
                                <input id="result" type="text" class="form-control form-input" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <button id="btn" class="btn w-100 form-button">Ver resultado</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <script src="vendors/bootstrap/js/bootstrap.js"></script>
        <script src="vendors/jquery/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

        <script>
            $(document).ready(function() {
                $.alert({
                    title: 'Rich!',
                    content: 'Quieres ver a kari verdad??!',
                });
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