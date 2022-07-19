<?php

class Telefono{
public  $carga;
    public function cargar($hora){
        $nuevaCarga = 20*$hora;
        if($nuevaCarga>100){
            $this->carga=100;
        }else{
            $this->carga+=$nuevaCarga;
            if ($this->carga>100) {
                $this->carga=100;
                # code...
            }
        }
    }
}

$telefono2=new Telefono();

$telefono2->cargar(2);
$telefono2->cargar(2);
$telefono2->cargar(6);


echo $telefono2->carga;