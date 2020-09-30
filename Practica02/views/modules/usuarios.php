<?php

session_start();
if(!$_SESSION["validar"]){

    header("location: index.php?action=ingresar");

    exit();

}
?>

<h1> USUARIO </h1>
<table>
<thead>
<tr>
<th>Usuario</th>
<th>Contrasena</th>
<th>Email</th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<?php
$vistaUsuario = new MvcController();
$vistaUsuario -> vistaUsuariosController();
$vistaUsuario -> borrarUsuarioController();
?>
</tbody>
</table>
<?php
    if(isset($_GET["action"])){

        if($_GET["action"] == "cambio"){
            echo "Cambio Exitoso";
        }

    } 

?>