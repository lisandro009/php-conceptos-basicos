<?php

class Comentario{

    private $descripcionComentario;
    private $usuario;

    function __construct($descripcion,$usuario){
        $this->descripcionComentario=$descripcion;
        $this->usuario=$usuario;// Se debe asignar el usuario que realizo 
    }                           //el comentario por la relacion de 1

    public function getDescripcionComentario(){
        return $this->descripcionComentario;
    }

    public function setDescripcionComentario($descripcion){
        $this->descripcionComentario=$descripcion;
    }
    public function getUsuario(){
        return $this->usuario;
    }

    public function __toString(){//Metodo para saber el comentario y el usuario que lo realizo
        return $this->usuario->getUsuario().": ".$this->descripcionComentario;
    }
// En este caso no es logico que se pueda modificar el usuario que creo el comentario
}

