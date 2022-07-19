<?php require './Views/header.php';?>
<form method="POST" action="<?php echo constant('url');?>autenticacion/loginform">

    <label for="usuario">Email</label>
    <input name="email" type="text">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Entrar ">
</form>
<?php require './Views/footer.php';?>