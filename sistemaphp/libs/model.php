<?php

class Model{

    protected $connPdo;
    
    function __construct(){
        $this->db=new Database();
        $this->connPdo=$this->db->conectar();
    }
}