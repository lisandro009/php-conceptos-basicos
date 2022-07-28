<?php

class Cliente{
    private $nombre;

    function __construct($nombre){
        $this->nombre=$nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        return $this->nombre=$nombre;
    }

    public function __toString(){
        return "Cliente: ".$this->getNombre();
    }
}