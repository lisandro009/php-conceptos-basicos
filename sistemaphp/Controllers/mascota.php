<?php

class Mascota extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render("mascota/index");
    }

    public function show(){
        parent::loadModel("mascota");
         $this->model->show();

    }

}