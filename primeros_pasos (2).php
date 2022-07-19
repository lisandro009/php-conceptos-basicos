<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        function nombreFuncion(){
            echo "Funcion imprimiendo";
        }
    ?>
    <h1>PHP</h1>
    <?php

        funcionExterna();
        print "Hola mundo en php <br>";
        
        $nombre="Christian";
        include("archivo_externoss.php"); // include cuando el codigo no es indispensable para su ejecucion y da un error solo en esta linea y no corta el flujo de ejecucion
                                        // Con require cuando el programa es indispensable para su ejecucion y no ejecuta  el codigo a continuacion del require

        print $nombre;
        print "el nombre es $nombre";

        $edad= 12;

        echo $nombre,$edad;// Es mas rapido que print

        

        nombreFuncion();
    ?>
</body>
</html>