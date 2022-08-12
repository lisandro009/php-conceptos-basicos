    <?php
    require_once 'libs/database.php';
    require_once 'libs/Controller.php';
    require_once 'libs/model.php';
    require_once 'libs/view.php';
    require_once 'libs/config.php';

    $url=isset($_GET["url"]) ? $_GET["url"]:null; // asigna la url que se coloca en el navegador
        $url = rtrim($url,'/'); //quitamos / del final de la ruta
        
        // separamos cada uno de las partes de la ruta dividos por la / y lo guardamos en un array
        $url = explode('/',$url);
        
        
        if($url[0]!=""){
             // ruta del controlador que se llame mediante la url
            $archivoControlador = 'Controllers/'.$url[0].".php";

            if (file_exists($archivoControlador)) {
                # code...
                require_once $archivoControlador; //Cargamos el archivo
                
                $controlador= new $url[0]; // Instanciamos el controlador solicitado en la url
                
                if(isset($url[1])){
                    $metodo=$url[1];// La posicion uno del arreglo es el metodo del controlador
                    if (function_exists($metodo)) {
                        $controlador->$metodo();
                    }else {
                        # code...
                        echo "No se ha encontrado la ruta";

                    }
                    
                }
            }else{
                echo "No se ha encontrado la ruta";
            }
        }else{//Si no se coloca nada en la ruta muestra la vista de inicio o home
            require_once "Controllers/index.php";
            $index = new Index();
        }

        
    ?>
