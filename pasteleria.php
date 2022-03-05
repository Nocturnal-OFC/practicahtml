<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/vnd.microsoft.icon" href="NocturnalOFCicon.ico" sizes="16x16">
    <title>Nocturnal_OFC</title>
    <style>
        body{
background: url(https://drscdn.500px.org/photo/70151163/q%3D80_h%3D600_of%3D1/v2?sig=14e26f6d3732fd8c7ee8fdef22e2f00a39f004922cf570caff21f2baddaa4858);
background-size: cover;
background-repeat: no-repeat;
background-position: center;
        }
        .Neon{
    box-shadow:
		0 0 10px aqua,
		0 0 15px aqua,
		0 0 25px aqua,
		0 0 45px aqua,
		0 0 85px aquamarine,
		0 0 95px aquamarine;
        width: 600px;
        height: 400px;
        margin: 7% 0 0 0%;
        background-color: gray;
        filter:alpha(opacity=70);
        -moz-opacity:.70;opacity:.70;
}
.Neon2{
    box-shadow:
		0 0 10px aqua,
		0 0 10px aqua,
		0 0 15px aqua,
		0 0 35px aqua,
		0 0 75px aquamarine,
		0 0 85px aquamarine;
        width:300px;
        border-radius: 10px;
}
    </style>
</head>
<body>
    <center>
        <div class="Neon">
<div class="Neon2">
Hola 
<?php echo $_GET["nombre"]; 
?>
</div><br>
<div class="Neon2">
Tu email es: <br>
<?php 
echo $_GET["email"]; 
?>
</div><br>
<div class="Neon2">
Tu pedido registrado es: <br>
<?php
echo $_GET["pedido"];
?>
</div>
        </div>
    </center>
</body>
</html>