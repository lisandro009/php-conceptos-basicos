<?php 
include "JefeDeVentas.php";
include "Secretario.php";


$empleado1=new JefeDeVentas();
$secretario= new Secretario();

$empleado1->generarReporte();
$secretario->generarReporte();
