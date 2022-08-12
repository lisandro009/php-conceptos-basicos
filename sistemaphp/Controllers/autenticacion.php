<?php

class Autenticacion extends Controller{

    function __construct(){
        parent::__construct();

    }

    public function login(){
        $this->view->render("autenticacion/login");

    }
    public function loginform(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            parent::loadModel("Usuario");
            $email= $_POST["email"];
            $password= $_POST["password"];

            if(isset($_SESSION['user'])){
                header("Location:".constant('url'));
            }else{
                if($this->model->verificarUsuario($email,$password)){
                    $_SESSION['user']=$email;
                    header("Location:".constant('url'));
                    }else{
                    echo("asdsd");

                    }
            }
        }else{
            header("Location:".constant('url'));
            echo("asdsd");

        }       
    }

    public function logout(){
        session_destroy();
        header("Location:".constant('url'));
    }

    public function registrar(){
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->view->render("autenticacion/registro");
        }else{
            $this->loadModel("usuario");
            $this->model->setUsuario($_REQUEST['email']);
            
            if($this->model->setPassword("123")){
                echo "registrado";
            }else{
                $this->view->shortPass="La contraseña debe tener al menos 8 caracteres";

                $this->view->render("autenticacion/registro");
                
            }
        }


    }
    
}