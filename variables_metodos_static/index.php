<?php

include "Computadora.php";

Computadora::asignarDescuento();

$computadoraDell = new Computadora();
$computadoraDell->obtenerPrecio('Dell');
$computadoraHp = new Computadora();
$computadoraHp->obtenerPrecio('HP');
$computadoraHp->agregarMonitor();
echo 'Computadora comprada con precio:'.$computadoraDell->precioTotal();
echo 'Computadora comprada con precio:'.$computadoraHp->precioTotal();