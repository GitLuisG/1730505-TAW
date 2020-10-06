<?php
session_start();
if($_SESSION["validar"]){
    header("location: index.php?action=Bienvenido");
    exit();
}
?>
<h1>Iniciar session</h1>
<form class="form-inline" method="POST">
    <input class="form-control" name="usuarioIngreso" type="text" placeholder="username"><br>
    <input class="form-control" name="passwordIngreso" type="password" placeholder="password"><br>
    <input class="form-control" type="submit" ><br>
</form>
<?php
if(isset($_POST["usuarioIngreso"])){
    $mvc = new ControllerUsuarios();
    $mvc-> ValidarUsuario();
}
?>