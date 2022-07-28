<?php
include "Cuenta.php";
include "Cliente.php";

$cliente1 = new Cliente("Juan");
$cuenta= new Cuenta(1000,$cliente1);
$cuenta->retirar(299);
$cuenta->retirar(2199);
$cuenta->retirar(2199);
$cuenta->abonar(1000);

echo $cuenta;

