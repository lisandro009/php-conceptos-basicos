<?php

class View{

    public function render($vista){
        require 'Views/'.$vista.'.php';
    }
}