<?php

class Transaccion{
    private $tipo;
    private $monto;

    function __construct($tipo,$monto){
        $this->tipo=$tipo;
        $this->monto=$monto;
    }

    public function getMonto(){
        return $this->monto;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function __toString(){
        return $this->getTipo().": $".$this->getMonto();
    }

    function __destruct(){//Metodo que se activa cuando se elimina los objetos de esta clase
        echo "Transaccion destruida <br>";
    }
}