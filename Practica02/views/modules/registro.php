<?php

session_start();
if(!$_SESSION['"validar"']){

    header("location: index.php?action=ingresar");

    exit();

}
?>

<h1> REGISTRO DE USUARIO </h1>

<form method="post">
<?php
    $registro = new MvcController();
    $registro -> registroUsuarioController();
    if(isset($_GET["action"])){

        if($_GET["action"] == "ok"){
            echo "Registro Exitoso";
        }

    } 
?>
</form>