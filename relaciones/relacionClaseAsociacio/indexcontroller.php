<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        include "Publicacion.php";
        $publicacion1=new Publicacion("Publicacion de ejemplo");
        echo '<h1>'.$publicacion1->getDescripcion().'</h1>';
    ?>    
    <form>
        <input type="text" placeholder="Comentar">
        <input type="submit" value="Comentar" id="boton">
        
    </form>
    <ul id="comentarios">

    </ul>
    <script>
        let lista=document.getElementById("comentarios");
        let boton=document.getElementById("boton");
        function comentar(){
            event.preventDefault();
            let ajax= new XMLHttpRequest();
            ajax.addEventListener(()=>{
                let nuevoLi=document.createElement("li")
                let nuevoComentario=document.createTextNode(ajax.responseText)
                nuevoLi.appendChil(nuevoComentario);
            })

            ajax.open("POST","Comentario.php");
            ajax.send();
        }
        boton.addEventListener("click",comentar);

    </script>
</body>
</html>