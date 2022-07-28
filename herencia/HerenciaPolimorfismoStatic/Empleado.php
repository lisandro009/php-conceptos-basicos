<?php

class Empleado{
    protected $nombre;
    protected $codigoEmpleado;
    protected $salario;
    protected $horasExtra;

    public function generarReporte(){
        echo "Reporte generico";
    }
}