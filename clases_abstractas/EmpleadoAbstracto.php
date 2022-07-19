<?php

abstract class  EmpleadoAbstracto
{
    protected $nombre;
    protected $codigoEmpleado;
    protected $salario;
    protected $horasExtra;

    abstract public function generarReporte();
}
?>