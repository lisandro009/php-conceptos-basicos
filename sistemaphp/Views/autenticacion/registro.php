<?php require './Views/header.php';?>
<form method="POST" action="<?php echo constant('url');?>autenticacion/registrar">
    <label for="usuario">Nombre</label>
    <input name="email" type="text">
    <label for="usuario">Email</label>
    <input name="email" type="text">
    <?php 
        if (isset($this->shortPass)) {
            # code...
            echo "<label style='color:red;'>".$this->shortPass."</label>";
        }
    ?>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Entrar ">
</form>
<?php require './Views/footer.php';?>