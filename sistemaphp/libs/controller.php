<?php
class Controller{

    protected $view;
    protected $model;
    function __construct(){
        $this->view = new View();
    }

    public function loadModel($model){
        $url = 'Models/'.$model.'Model.php';
        //echo $url;
        if(file_exists($url)){
            require $url;
            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }
}