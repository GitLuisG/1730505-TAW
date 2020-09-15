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
            if(isset($_GET['action'])){
                $enlacesController = $_GET["action"];
            }            
        }else{
            $enlacesController = "index";
        }
        //Mandar el parametro de "enlacesController al modelo EnlacesPaguinas en su propiedad enlacePaginaModel"
        $respuesta = Paginas::enlacesPaginasModel($enlacesController);
        include $respuesta;
    }

    //Metodo para registro de usuarios
    public function registroUsuarioController(){
      $datosController= array(
        "usuario" => $_POST["usuarioRegistro"],
        "password"=>$_POST["passwordRegistro"],
        "email"=>$_POST["emailRegistro"]
      );
      $respuesta = Datos::registroUsuarioModel(
          $datosController, "usuarios"
      );
      //recibir la respuesta del modelo para saber que sucedio (succes o error)
      if(respuesta == "Success"){
        header("location: index.php?action=ok");
      }else{
        header("location: index.php");
      }

    }

    public function ingresoUsuarioController(){
        if(isset($_POST["usuarioIngreso"])){
            $datosController= array("usuario"=>$_POST["usuarioIngreso"],
                                    "password"=>$_POST["passwordIngreso"]);
            $respuesta = Datos::ingresoUsuarioModel($datosController, "usuario");
            if($respuesta["usuario"]==$_POST["usuarioIngreso"] && $respuesta["password"]==$_POST["passwordIngreso"]){
                session_start();
                $_SESSION["validar"] = true;
                header("location: index.php?action=usuarios");
            }
            else{
                header("location: index.php?action=fallo");
            }
        }
    }

}
?>