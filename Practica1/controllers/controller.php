<?php
class MvcController{
    //llamar a la plantilla template
    public function plantilla(){
        include "views/template.php";
    }
    //metodo para mostrar el contenido de las paguinas en la plantilla
    public function enlacesPaginasController(){
        //Verificar la variable 'action' que viene desde las url's de navegacion.
        if(isset($_GET["action"])){
            $enlacesController = $_Get["action"];
        }else{
            $enlacesController = "index";
        }
        //Mandar el parametro de "enlacesController al modelo EnlacesPaguinas en su propiedad enlacePaginaModel"
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
        include $respuesta;
    }

}
?>