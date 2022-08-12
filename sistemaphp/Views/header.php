<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="<?php echo constant('url'); ?>/Views/css/index.css">
     <link rel="stylesheet" href="<?php echo constant('url'); ?>/Views/css/navbar.css">

</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="#" class="logo">Logo</a>
            <ul class="nav-menu">
                <li class="nav-menu-item"><a href="<?php echo constant('url');?>"> Home</a></li>
                <li class="nav-menu-item"><a href="<?php echo constant('url');?>clientes"> Diagnosticos</a></li>
                <?php
                if (isset($_SESSION['user'])) {
                    # code...
                    echo '<li class="nav-menu-item"><a href="'. constant('url'). 'autenticacion/logout">Logout</a></li>';
                    echo '<li class="nav-menu-item"><a href="'. constant('url'). 'autenticacion/logout">'.$_SESSION['user'].'</a></li>';

                }else{
                    echo '<li class="nav-menu-item"><a href="'. constant('url').'autenticacion/login">Iniciar sesion</a></li>';

                }
                ?>
            </ul>
        </nav>
</header>
