<?php
require_once "Libs/app.php";
require_once "Libs/Db.php";
require_once 'Libs/controller.php';
require_once 'Libs/view.php';
//Obtenemos la url que se coloca en el navegador
$url = isset($_GET["url"])?$_GET["url"]:null;
if ($url==null) {//Si la url viene vacia mostramos la pagina principal
    require "Controllers/indexController.php";
    $index=new IndexController();
}