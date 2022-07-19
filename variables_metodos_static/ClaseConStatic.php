<?php
class ClaseConStatic {

    public static $variableEstatica;
    
    public static function unMetodoEstatico() {
        // ...
        self::$variableEstatica;
        ClaseConStatic::$variableEstatica;
    }
}

ClaseConStatic::$variableEstatica;

ClaseConStatic::unMetodoEstatico();