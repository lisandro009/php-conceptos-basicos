<?php
include "Publicacion.php";
include "Usuario.php";
include "Comentario.php";
//creamos usuarios
$usuario=new Usuario("Usuario1");
$usuario1=new Usuario("Usuario2");

//Creamos una publicacion
$publicacion1 = new Publicacion("Publicacion de ejemplo");

//Creamos los comentarios y le asignamos el usuario que los realizo
$comentario1=new Comentario("Comentario de ejemplo 1",$usuario);
$comentario2=new Comentario("Comentario de ejemplo 2",$usuario);
$comentario3=new Comentario("Comentario de ejemplo 3",$usuario);
$comentario4=new Comentario("Comentario de ejemplo 3",$usuario1);


//Asociamos los comentarios a la publicacion
$publicacion1->agregarComentario($comentario1);
$publicacion1->agregarComentario($comentario2);
$publicacion1->agregarComentario($comentario3);
$publicacion1->agregarComentario($comentario4);


echo $publicacion1;




?>