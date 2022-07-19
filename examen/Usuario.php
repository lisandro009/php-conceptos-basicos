<?php
class Usuario{
    protected $username="xyz";
    protected $email="xyz@gmail.com";
}

$nuevoUsuario = new Usuario();
echo $nuevoUsuario->username;