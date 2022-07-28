<?php

class Model{

    protected $pdoConexion;
    
    function __construct(){
        $this->db=new Database();
        $this->pdoConexion=$this->db->conectar();
    }
}