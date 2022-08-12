<?php

class Database{
    
    private static $host="localhost";
    private static $password="X0!4Pi0b6%9n";
    private static $user="root";
    private static $dbname="mydb";
    private static $port="3307";
    protected $conexionPdo;

    public function __construct(){

    }

    public function conectar(){
        try {
            $conexion='mysql:host='.self::$host.';port='.self::$port.';dbname='.self::$dbname;
            $opciones=[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES=>false
            ];
            $this->conexionPdo=new PDO($conexion,self::$user,self::$password,$opciones);
            return $this->conexionPdo;
        } catch (PDOException $e) {
            //throw $th;
            print_r('Error de conexion '.$e->getMessage());

        }
    }
}