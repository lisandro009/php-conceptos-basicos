<?php

class UsuarioModel extends Model{
    private $usuario;
    private $password;

    function __construct(){
        parent::__construct();
    }

    public function getUsuario(){
        return $this->usuario;
    }
    public function setUsuario($usuario){
        $this->usuario=$usuario;
    }


    public function setPassword($password){
        var_dump(strlen($password));
        if (strlen($password)<8) {
            # code...
            return false;
        }else{
            $this->password=$password;
            return true;
        }
    }
    public function verificarUsuario($correo,$password){
        $resultado=$this->connPdo->prepare("Select * from persona where correo= :email and password=:password");
        $resultado->execute([':email'=>$correo,':password'=>$password]);
        $usuario = $resultado->fetch(PDO::FETCH_ASSOC);

        if(empty($usuario)){
            return false;
        }else {
            return true;
        }

    }


    public function registrarUsuario(){
        echo "usuario registrado";
    }
}