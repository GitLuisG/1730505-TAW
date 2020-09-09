<?php
 //Invoca al controlador y modelo solicitado
 require_once "controllers/controller.php";
 require_once "models/model.php";

 //Se crea un nuevo controlador llamado a la plantilla que mostrara al usuario
 $mvc = new MvcController();
 mvc->plantilla();
?>