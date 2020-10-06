<?php
session_start();
if(!$_SESSION["validar"]){
    header("location: index.php?action=ingresar");
    exit();
}
?>
<h1>Editar</h1>
<table id="example" class="display table table-striped"  style="width:100%">
        <thead>
            <tr>
                <th>usuario</th>
                <th>contrasena</th>
                <th>email</th>
                <th>Funciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
    $mvc = new ControllerUsuarios();
    $mvc-> vistausuario();
    ?>
        </tbody>
        <tfoot>
            <tr>
                <th>usuario</th>
                <th>contrasena</th>
                <th>email</th>
                <th>Funciones</th>
            </tr>
        </tfoot>
    </table>
