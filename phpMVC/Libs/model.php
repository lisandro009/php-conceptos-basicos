<?php

class Model{

    protected $conPDO;

    function __construct(){
        $db=new Db();
        $this->conPDO=$db->conectarDb();
    }
}