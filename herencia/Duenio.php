<?php
include "Usuario.php";
class Duenio extends Usuario{
    private $tarjetaCredito;
    private $telefono;
    public static $descuento=2000;// una variable estatica es un valor que sera igual siempre independiente del objeto
    //que se cree, si se modifica este conservara su valor en la clase y no se define por los objetos

    public function registrarse(){
        //codigo
    }

    public function agregarMascota(){
        //codigo
    }

    public function getDatosPersonales($nombre,$apellido,$correo){
        parent::setNombre($nombre);
        parent::setApellido($apellido);
        parent::setCorreo($correo);
        self::$descuento = 233;
        echo self::$descuento;
        echo self::$descuento;

        echo  parent::getNombre()." ". parent::getApellido()." ". parent::getCorreo();
    }
}