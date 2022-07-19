<?php

class Mascota{
    public $nombre;

}

$perro = new Mascota();
$perro->nombre = "Nombre de la mascota";

echo $perro->nombre;