<?php

class Model{

    protected $dbConexion;
    
    function __construct(){
        $this->db=new Database();
        $this->pdoConexion=$this->db->conectar();
    }
}