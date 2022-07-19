<?php

class Computadora{
    private $marca;
    private $precio;
    private static $descuento=0;

    public function setMarca($marca){
        $this->marca=$marca;
    }
    public function getMarca(){
        return $marca;
    }
    public function setPrecio($precio){
        $this->precio=$precio;
    }
    public function getPrecio(){
        return $precio;
    }
    public function obtenerPrecio($marca){
        switch ($marca) {//funciona como si consultaramos una base de datos
            case 'Dell':
                $this->precio=400;
                break;
            case 'HP':
                $this->precio=300;
            break;
            
        }
    }

    public function agregarMouse(){
        $this->precio+=10;
    }

    public function agregarUps(){
        $this->precio+=90;
    }

    public function agregarMonitor(){
        $this->precio+=200;
    }
    public function agregarTeclado(){
        $this->precio+=50;
    }
    public static function asignarDescuento(){
        self::$descuento=50;
    }

    public function precioTotal(){
        return  $this->precio-Computadora::$descuento;
    }
}