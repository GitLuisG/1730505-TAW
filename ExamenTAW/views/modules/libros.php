<?php

session_start();
if(!$_SESSION["validar"]){
    header("location: index.php?action=ingresar");
    exit();
}
?>
<h1>Libros</h1>
<table id="example" class="display table table-striped"  style="width:100%">
        <thead>
            <tr>
                <th>ISBN</th>
                <th>nombre</th>
                <th>autor</th>
                <th>editorial</th>
                <th>edición</th>
                <th>ano</th>
            </tr>
        </thead>
        <tbody>
            <?php
    $mvc = new ControllerLibros();
    $mvc-> vistaLibros();
    ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ISBN</th>
                <th>nombre</th>
                <th>autor</th>
                <th>editorial</th>
                <th>edición</th>
                <th>ano</th>
            </tr>
        </tfoot>
    </table>
