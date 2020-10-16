<?php
//invoca al controlador y modelo solicitado
require_once "config.php";
require_once MODELS['enlaces'];
require_once CONTROLLER['Controller'];
require_once MODELS['crud'];

//se crea un nuevo controlador llamando a la plantilla que mostrará al usuario
$mvc = new MvcController();
$mvc-> plantilla();

?>
