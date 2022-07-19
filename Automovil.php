<?php

class Automovil{
    var $ruedas;
    var $color;
    var $encendido;
    var $enMarcha;

    function Automovil(){
        $this->encendido=false; // this es una referencia al objeto en uso
        $this->enMarcha=false;
    }
    function encender(){
        $encendido=true;
        echo "Vehiculo encendido";
    }

    function apagar(){
        $encendido=false;
        echo("Vehiculo apagado");
    }
    function ponerEnMarcha(){
        $enMarcha=true;
        echo("Vehiculo en marcha");
    }
}

?>