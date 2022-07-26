<?php 

class Carrera{
    private $nombre;
    private $materias= array();

    function __construct($nombre){
        $this->nombre=$nombre;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    public function agregarMaterias($materia){
        $this->materias[]=$materia;
    }
    
    public function __toString(){
        $stringMateria="";
        foreach ($this->materias as $materia) {
            # code...
            $stringMateria=$stringMateria. $materia."<br>";
        }

        return "La materia ".$this->getNombre(). " contiene las materias <br>".$stringMateria;
    }

}

$materia1= new Materia("PRN115");
$materia2= new Materia("PRN215");
$carrera1=new Carrera("Ingenieria industrial");
$carrera2=new Carrera("Ingenieria de sistemas informaticos");


