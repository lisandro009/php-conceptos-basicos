<?php
include "Producto.php";
class Categoria{
    private $nombre;
    function __construct($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
}
//Creamos un producto
$producto=new Producto("Manzana",0.25);
//Creamos las categorias que se asociaran al producto 
$categoria1=new Categoria("Fruta");
$categoria2=new Categoria("Alimento saludable");

//Se asocia una categoria al producto creado
$producto->setCategoria($categoria1);
$producto->setCategoria($categoria2);

//Obtener la categoria por el indice
$categoria=$producto->getCategoria(2);
if (is_array( $categoria)) {//validamos si lo que devuelve el metodo es un arreglo
    
    echo $producto->getCategoria(2)->getNombre();
}else{
    echo "Sobre pasa el tamanio del arreglo <br>";
}

echo $producto;

