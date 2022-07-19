<?php
//Clase que verificara las url y asignara el controlador correspondiente
class Routes{

    function __construct(){
        $url=isset($_GET["url"]) ? $_GET["url"]:null; // asigna la url que se coloca en el navegador
        $url = rtrim($url,'/'); //quitamos / del final de la ruta
        

        $url = explode('/',$url);// separamos cada uno de las partes de la ruta dividos por la / y lo guardamos en un array
        
        
        if($url[0]!=""){
            $archivoControlador = 'Controllers/'.$url[0].".php"; // ruta del controlador que se llame mediante la url

            if (file_exists($archivoControlador)) {
                # code...
                require_once $archivoControlador; //Cargamos el archivo
                
                $controlador= new $url[0]; // Instanciamos el controlador solicitado en la url
                
                if(isset($url[1])){
                    $metodo=$url[1];// La posicion uno del arreglo es el metodo del controlador
                    $controlador->$metodo();
                }
            }else{
                echo "No se ha encontrado la ruta";
            }
        }else{
            require_once "Controllers/index.php";
            $index = new Index();
        }


    }
}