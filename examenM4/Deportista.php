<?php

abstract class Deportista{
    protected $nombre;
    protected $altura;
    protected $peso;

    abstract public function entrenar();
}
class Nadador extends Deportista{
    
    public function nadar(){
        echo "Persona nadando";
    }
}

$nadador1 = new Nadador();
$nadador1->nadar();