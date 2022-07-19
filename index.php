<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "Automovil.php";
    include "Duenio.php";

    $christian=new Duenio();
    $christian->getDatosPersonales("chr","Mendoza","lisandro@gmail.com");
    $carro=new Automovil();

    $carro->color="Rojo";
    $carro->encender(); 
    echo($carro->color);


    ?>
</body>
</html>