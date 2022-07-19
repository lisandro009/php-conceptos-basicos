<?php

class Clase{
    private $materia;
    private $alumnos=array();
    function __construct($materia,$alumno){
        $this->materia=$materia;
        $this->alumnos[]=$alumno;
    }

    public function getMateria(){
        return $this->$materia;
    }
    public function setMateria($materia){
        $this-> materia=$materia;
    }
    public function getAlumno($indice){
        if (sizeof($this->alumnos)>$indice) {
            # code...
        return $this->alumnos[$indice];

        }else{
            return "error al obtener el alumno";
        }
    }
    public function setAlumno($indice,$alumno){
        
        if (sizeof($this->alumnos)>$indice) {
            # code...
        $this->alumnos[$indice]=$alumno;

        }else{
            return "error al modificar un alumno";
        }
    }

    public function agregarAlumno($alumno){
        $this->alumnos[] =$alumno;
    }
    public function __toString(){
        $cadenaAlumnos="";
        foreach ($this->alumnos as $key ) {
            $cadenaAlumnos=$cadenaAlumnos." ".$key->getCarnet();
        }
        return "La Clase de ".$this->materia." la reciben los alumnos ".$cadenaAlumnos;
    }
}