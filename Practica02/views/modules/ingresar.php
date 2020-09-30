<h1>INGRESO</h1>

<form method="POST">

    <input type="text" placeholder="Usuario" name="usuarioIngreso" require>
    
    <input type="text" placeholder="Contrasena" name="passwordIngreso" require>
    
    <input type="submit" value="Enviar">

</form>

<?php
    $ingreso = new MvcController();
    $ingreso -> igresoUsuarioController();
    
    if(isset($_GET["action"])){

        if($_GET["action"] == "fallo"){
            echo "Fallo al iingresar";
        }

    } 

?>