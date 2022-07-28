<?php

class App{

    function __construct(){
        $url = isset($_GET["url"])?$_GET["url"]:null;
        if ($url==null) {
            // require_once "Controllers/index.php";
            // $index=new Index();
            require "Controllers/indexController.php";
            $index=new IndexController();
        }
    }
}