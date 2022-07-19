<?php
include "Clase.php";
class Alumno{
    private $carnet;

    function __construct($carnet){
        $this->carnet=$carnet;
    }

    public function getCarnet(){
        return $this->carnet;
    }

    public function setCarnet($carnetNuevo){
        $this->carnet=$carnetNuevo;
    }
}

$alumno1=new Alumno(12345);
$alumno2=new Alumno(12346);

$clase=new Clase("matematicas",$alumno1);
$clase->agregarAlumno($alumno2);

echo $clase;
