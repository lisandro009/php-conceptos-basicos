<?php

class Db{
    private $host;
    private $password;
    private $user;
    private $dbname;
    private $port;

    function __construct(){
        $this->host="localhost";
        $this->password="X0!4Pi0b6%9n";
        $this->user="root";
        $this->dbname="mydb";
        $this->port="3307";

    }

    public function conn(){
        try{
            $options=[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES=>false
            ];
            $conn=new PDO('mysql:host='.$this->host.';port='.$this->port.';dbname='.$this->dbname,$this->user,$this->password,$options);
            return $conn;
        }catch(PDOException $e){
            echo ("Error de conexion ".$e->getMessage());
        }
    }
}