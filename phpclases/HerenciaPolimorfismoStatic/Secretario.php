<?php 
include "Empleado.php";
class Secretario extends Empleado{
    
    public function generarReporte(){
        echo "Reporte del secretario";
    }

}