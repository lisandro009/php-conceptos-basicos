<?php
class  Usuario{
    protected $nombre;
    protected $apellido;
    protected $password;
    protected $correo;

    protected function cambiarPassword(){
        //Logica de programacion
    }
    protected function getNombre(){
        return $this->nombre;
    }
    
    protected function setNombre($nombre){
         $this->nombre=$nombre;
    }
    protected function getApellido(){
        return $this->apellido;
    }
    
    protected function setApellido($apellido){
         $this->apellido=$apellido;
    }
    protected function getPassword(){
        return $this->password;
    }
    protected function setPassword($password){
         $this->password=$password;
    }

    protected function getCorreo(){
        return $this->correo;
    }
    protected function setCorreo($correo){
         $this->correo=$correo;
    }
           

}

?>