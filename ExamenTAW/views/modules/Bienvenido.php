<?php

session_start();
if(!$_SESSION["validar"]){
    header("location: index.php?action=ingresar");
    exit();
}
?>
<h1>Bienvenido </h1>