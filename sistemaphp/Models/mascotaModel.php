<?php

class MascotaModel extends Model{

    function __construct(){
        parent::__construct();
    }

    public function show(){
        $sql= "Select * from Mascotas";
        $resultado = $this->pdoConexion->prepare($sql);
        $resultado->execute();
        var_dump($resultado);
        $filas=$resultado->fetch(PDO::FETCH_ASSOC);
        return $filas;
        
    }
}