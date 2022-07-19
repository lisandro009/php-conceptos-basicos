<?php 
include "JefeDeVentas.php";
include "Secretario.php";


$empleado=new JefeDeVentas();
$secretario1= new Secretario();

$empleado->generarReporte();
$secretario1->generarReporte();
