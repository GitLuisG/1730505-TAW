<?php
class EnlacesPaginas{
    //Modelo que permite mostrar
    public function enlacesPaginasModel($enlacesModel){
        if($enlacesModel == "nosotros" || $enlacesModel == "servicios" || 
        $enlacesModel == "contactenos"){
            $module = "views/".$enlacesModel.".php";
        }else if ($enlacesModel == "index"){
            $module = "views/inicio.php";
        }else{
            $module = "views/inicio.php";
        }
        return $module;
    }
}
?>