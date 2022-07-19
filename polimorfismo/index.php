<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Publicacion</h1>
    <h1>Bicicleta</h1>
    <h2>Comentarios</h2>
    <?php
    include "vendedor.php";
    include "comprador.php";

    $vendedor = new Vendedor();
    $comprador = new Comprador();

    $vendedor->comentar("Cual es el modelo?");
    $comprador->comentar("Es bmx");
    ?>

</body>
</html>