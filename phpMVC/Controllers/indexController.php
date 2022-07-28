<?php

class IndexController extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('index');
    }
}