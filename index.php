<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>_TEST con GIT</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>No agarra el fetch de agus :v</h1>
        <h2>HOLA MUNDO EN JAVA</h2>
        <div>
            <input id="uno" type="text">
            <input id="dos" type="text">
            <input id="result" type="text">
            <button id="btn">Ver resultado</button>
        </div> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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