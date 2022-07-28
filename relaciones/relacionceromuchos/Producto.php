<?php

class Producto{
    private $nombre;
    private $precio;
    private $categorias=array();//Establecemos que un producto puede tener categoria

    function __construct($nombre,$precio){
        $this->nombre=$nombre;
        $this->precio=$precio;
    }
    public function getNombre(){
        return $this->$nombre;
    }
    public function setNombre($nombre){
        $this->nombre =$nombre;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($precio){
        $this-> precio=$precio;
    }
    public function getCategoria($indice){
        if (sizeof($this->categorias)>$indice) {//Verficamos si el indice proporcionado es valido
            return $this->categorias[$indice];
        }else{
            throw new Exception('Error al objetener la categoria');
        }
    }
    public function setCategoria($categoria){
        $this->categorias[] =$categoria;
    }

    public function __toString(){
        $categoriaProducto="";
        foreach ($this->categorias as $key ) {
            $categoriaProducto=$categoriaProducto." ".$key->getNombre();
        }
        if ($categoriaProducto=="") {//Verificamos si hay categorias
            # code...
            return "Producto ".$this->nombre." sin categorias";
        }else{
            return "Producto ".$this->nombre." con categorias: ".$categoriaProducto."<br>";

        }
    }
}

