<?php
include "Conductor.php";
class Taxi{
    private $matricula;
    private $conductor;
    
    function __construct($matricula,$conductor){
        $this->matricula=$matricula;
        $this->conductor=$conductor;
    }

    public function setMatricula($matricula){
        $this->matricula=$matricula;
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function setConductor($conductor){
        $this->conductor=$conductor;
    }
    public function getConductor(){
        return $this->conductor;
    }

    public function __toString(){
        return "conductor: ".$this->conductor->getNombre(). "del taxi: ". $this->matricula;
    }

}

$conductor=new Conductor("juan");
$taxi=new Taxi("abc1234",$conductor);

echo $taxi;
