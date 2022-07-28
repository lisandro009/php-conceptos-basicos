<?php

class App{

    function __construct(){
        $url = isset($_GET["url"])?$_GET["url"]:null;
        if ($url==null) {
            // require_once "Controllers/index.php";
            // $index=new Index();
            $db=new Db();
            $db->conn();
        }
    }
}