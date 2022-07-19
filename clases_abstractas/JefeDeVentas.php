<?php
include "EmpleadoAbstracto.php";
class JefeDeVentas extends EmpleadoAbstracto{   
    
     public function generarReporte(){
         echo "<p>Reporte de ventas </p>";
     }


}