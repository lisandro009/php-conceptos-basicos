<?php

class Publicacion{
    private $descripcion;
    private $comentarios=array();
    
    function __construct($descripcion){//No se asigna un comentario en el constructor
        $this->descripcion=$descripcion;//ya que una publicacion no necesariamente debe tener
    }                                   //asociado un comentario

    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;//Metodo por si se requiere actualizar la publicacion
    }

    public function getComentarios(){
            return $this->comentarios;
    }
    public function agregarComentario($comentario){
        $this->comentarios[]=$comentario;
    }

    public function __toString(){
        $comentariosPublicacion="";
        foreach ($this->comentarios as $comentario ) {
            $comentariosPublicacion=$comentariosPublicacion." ".$comentario;
        }
        if ($comentariosPublicacion=="") {//Verificamos si hay categorias
            # code...
            return "Publicacion <h1><b>".$this->descripcion." </b></h1><br> Sin comentarios: ";
        }else{
            return "Publicacion <h1><b>".$this->descripcion." </b></h1><br>Comentarios: ".$comentariosPublicacion."<br>";

        }
         
    }
}