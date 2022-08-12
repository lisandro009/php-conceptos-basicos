<?php

class Index extends Controller{

    function __construct(){
        //Llamamos al constructor del padre para poder utilizar sus metodos y sus atributps
        parent::__construct();
        //Llamamos a la vista principal
        $this->view->render('index');
    }
}