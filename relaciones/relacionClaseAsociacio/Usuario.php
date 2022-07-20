<?php

class Usuario{
    private $username;
    private $comentarios=array();

    function __construct($username){
        $this->username=$username;
    }

    public function getUsuario(){
        return $this->username;  
    }
    public function setUsuario($username){
         $this->username=$username;  
    }

}