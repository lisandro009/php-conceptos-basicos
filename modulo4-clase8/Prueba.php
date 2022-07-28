<?php

include "Materia.php";
include "Carrera.php";

$materia1= new Materia("PRN115");
$materia2= new Materia("PRN215");
$carrera1=new Carrera("Ingenieria industrial");
$carrera2=new Carrera("Ingenieria de sistemas informaticos");
//Se agregan las materias a las carreras
$carrera1->agregarMaterias($materia1);
$carrera1->agregarMaterias($materia2);
$carrera2->agregarMaterias($materia1);
$carrera2->agregarMaterias($materia2);

echo $carrera1;
echo $carrera2;
