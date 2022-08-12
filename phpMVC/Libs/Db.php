<?php

class Db{
    private static $host="localhost";
    private static $password="X0!4Pi0b6%9n";
    private static $user="root";
    private static $dbname="mydb";
    private static $port="3307";

    function __construct(){
    }

    public function conectarDb(){
        try{
            $options=[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES=>false
            ];
            $conn=new PDO('mysql:host='.self::$host.';port='.self::$port.';dbname='.self::$dbname,self::$user,self::$password,$options);
            return $conn;
        }catch(PDOException $e){
            echo ("Error de conexion ".$e->getMessage());
        }
    }
}