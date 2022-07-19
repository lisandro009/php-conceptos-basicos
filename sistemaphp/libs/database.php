<?php

class Database{
    
    private static $host="localhost";
    private static $user="root";
    private static $password="psp3010";
    private static $dbName="phpmvc";
    protected $conexionPdo;

    public function __construct(){

    }

    public function conectar(){
        try {
            $conexion='mysql:host='.self::$host.';dbname='.self::$dbName;
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