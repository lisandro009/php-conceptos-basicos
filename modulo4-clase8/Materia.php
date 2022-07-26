<?php

class Materia{
    private $codigo;

    function __construct($codigo){
        $this->setCodigo($codigo);
    }

    public function setCodigo($codigo){
        if (strlen($codigo)==6) {
            # code...
            $this->codigo=$codigo;
        }else{
            throw new Exception("El codigo de la materia debe tener 6 caracteres");
            
        }
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function __toString(){
        return 'Materia con codigo '. $this->getCodigo();
    }
}   