<?php

class View{

    public function render($nombre){
        require 'views/'.$nombre.'.php';
    }
}