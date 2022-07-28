<?php

class Controller{
    protected $view;
    protected $model;
    
    function __construct(){
        $this->view= new View();
    }

    public function loadModel($model){
        $ruta= 'Models/'.$model.'Model.php';

        if(file_exists($ruta)){
            require $ruta;
            $modelName=$model.'Model';
            $this->model= new $model();
        }
    }
}