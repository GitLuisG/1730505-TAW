<?php
session_start();
if($_SESSION["validar"]){
    header("location: index.php?action=Bienvenido");
    exit();
}
?>

<h1>Registrar usuario</h1>
<form class="form-inline" method="POST">
    <input class="form-control" name="usuarioRegistro" type="text" placeholder="username" require><br>
    <input class="form-control" name="passwordRegistro" type="password" placeholder="password" require><br>
    <input class="form-control" name="emailRegistro" type="email"  placeholder="ejemplo@asda.asdas" require>
    <input class="form-control" type="submit" ><br>
</form>
<?php
if(isset($_POST["usuarioRegistro"])){
    $mvc = new ControllerUsuarios();
    $mvc-> regUsuario();
}
?>