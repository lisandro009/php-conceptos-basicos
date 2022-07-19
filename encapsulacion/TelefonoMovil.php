<?php
class TelefonoMovil{
    private $ram;
    private $rom;
    private $tarjetaMadre;
    private $capacidadBateria;
    private $memoriaExtraible;

    public function getRam(){
        return $this->$ram;
    }
    public function getRom(){
        return $this->$rom;
    }
    public function getTargetaMadre(){
        return $this->$tarjetaMadre;
    }

    public function getCapacidadBateria(){
        return $this->$capacidadBateria;
    }
    public function getMemoriaExtraible(){
        return $this->$memoriaExtraible;
    } 
    public function setMemoriaExtraible($nuevaMemoriaExtraible){
        $this->$memoriaExtraible=$nuevaMemoriaExtraible;
    } 
}
?>