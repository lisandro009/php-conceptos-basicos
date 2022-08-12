<?php

class Autenticacion extends Controller{

    function __construct(){
        parent::__construct();
    }

    function login(){
        $this->view->render('autenticacion/login');
    }
}