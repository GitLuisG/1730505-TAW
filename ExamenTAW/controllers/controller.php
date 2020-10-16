<?php
class MvcController{
    
    public function plantilla(){
        include VIEWS['Template'];
    }

    // metodo para mostrar el contenido de las paginas
    public function enlaces(){
            if(isset($_GET['action'])){
              $enlaces = $_GET['action'];
            }else{
              $enlaces="index";
            }
            $respuesta=Paginas::enlacesPaginasModel($enlaces);
            include $respuesta;
    }
}

class ControllerLibros{

    //Método para registro de Libros
    public function regLibros(){
    $datosController = array(
        "ISBN"=>$_POST["inISBN"],
        "nombre"=>$_POST["innombre"],
        "autor"=>$_POST["inautor"],
        "editorial"=>$_POST["ineditorial"],
        "edición "=>$_POST["inedición"],
        "ano"=>$_POST["inano"]
    );
            //Envíamos los parametros al modelo para que procese el registro
            $respuesta = Datos::registroLibroModel($datosController,"usuarios");

            //Recibir la respuesta de modelo para saber qué sucedió(Sucess o error)
            if($respuesta == "success"){
            header("location:index.php?action=ok");
            }else{
            header("location:index.php");
            }
    }
    //Metodo para editar los libros
    public function editarLibro(){
        $datosController = array(
            "ISBN"=>$_POST["inISBN"],
            "nombre"=>$_POST["innombre"],
            "autor"=>$_POST["inautor"],
            "editorial"=>$_POST["ineditorial"],
            "edición "=>$_POST["inedición"],
            "ano"=>$_POST["inano"]
        );
        //Enviamos al modelo el id para hacer la consulta y obtener sus Datos
        $respuesta = Datos::editarLibroModel($datosController, "usuarios");
        //Recibimos respuesta del modelo e IMPRIMOS UN FORM PARA Editar
        echo '<input type="hidden" value="'.$respuesta["id"].'" name="idEditar">
        <input type="text" value="'.$respuesta["ISBN"].'" name="usuarioEditar" required>
        <input type="hidden" value="'.$respuesta["nombre"].'" name="passwordEditar" required>
        <input type="hidden" value="'.$respuesta["autor"].'" name="emailEditar" required>
        <input type="hidden" value="'.$respuesta["editorial"].'" name="emailEditar" required>
        <input type="hidden" value="'.$respuesta["edición"].'" name="emailEditar" required>
        <input type="hidden" value="'.$respuesta["ano"].'" name="emailEditar" required>
        <input type="submit" value="Actualizar">';
    }

    //Metodo para eliminar libros
    public function eliminarLibro(){
        if(isset($_GET["idBorrar"])){
            $datosController = $_GET["idBorrar"];
            $respuesta = Datos::borrarLibroModel($datosController, "usuario");
            if($respuesta=="success"){
              header("location:index.php?action=usuarios");
             }
          }
    }
    
    //metodo para las vista de las tablas
    public function vistaLibros(){
        //Envío al modelo la variable de control y la tabla a donde se hará
        $respuesta = Datos::vistaLibrosModel();
        foreach($respuesta as $row => $item){
        echo '<tr>
        <td>'.$item["ISBN"].'</td>
        <td>'.$item["nombre"].'</td>
        <td>'.$item["autor"].'</td>
        <td>'.$item["editorial"].'</td>
        <td>'.$item["edicion"].'</td>
        <td>'.$item["ano"].'</td>
        <td><a href="index.php?action=libros&id='.$item["id"].'"<button> Editar </button></a></td>
        <!--COLUMNA PARA BORRAR-->
        <td><a href="index.php?action=libros&idBorrar='.$item["id"].'"<button> Eliminar </button></a></td>
         </tr>';
        }
    }

}

class ControllerUsuarios{

    //Metodo para registrar usuario
    public function regUsuario(){
        //Almaceno en una array los valores de la vista de registro
        $datosController = array(
            "usuario"=>$_POST["usuarioRegistro"],
            "password"=>$_POST["passwordRegistro"],
            "email"=>$_POST["emailRegistro"]
        );
        //Envíamos los parametros al modelo para que procese el registro
        $respuesta = Datos::registroUsuarioModel($datosController);

        //Recibir la respuesta de modelo para saber qué sucedió(Sucess o error)
        if($respuesta == "success"){
        header("location:index.php?action=ok");
        }else{
        header("location:index.php");
        }
    }

    //metodo para validar el ingreso
    public function ValidarUsuario(){
        if(isset($_POST["usuarioIngreso"])){
            $datosController = array(
                "usuario"=>$_POST["usuarioIngreso"],
                "password"=>$_POST["passwordIngreso"],
            );
            //Mandar valores del array al modelo
            $respuesta = Datos::ingresoUsuarioModel($datosController);
            //Recibe respuesta del modelo
            if($respuesta["usuario"]==$_POST["usuarioIngreso"] && $respuesta["contrasena"]==$_POST["passwordIngreso"]){
                session_start();
                $_SESSION["validar"]=true;
                header("location:index.php?action=Bienvenido");
              }else{
                header("location:index.php?action=fallo");
            }
          }
    }
    
    //metodo para las vista de las tablas
    public function vistausuario(){
        //Envío al modelo la variable de control y la tabla a donde se hará
        $respuesta = Datos::vistaUsuariosModel("usuarios");
        foreach($respuesta as $row => $item){
        echo '<tr>
        <td>'.$item["usuario"].'</td>
        <td>'.$item["contrasena"].'</td>
        <td>'.$item["email"].'</td>
        <td><a href="index.php?action=editar&id='.$item["id"].'"<button> Editar </button></a></td>
        <!--COLUMNA PARA BORRAR-->
        <td><a href="index.php?action=usuarios&idBorrar='.$item["id"].'"<button> Eliminar </button></a></td>
         </tr>';
        }
    }

    // metodo para modificar los usuarios
    public function editarUsuario(){
        //solicitar el id del usuario a editar
        $datosController = $_GET["id"];
        //Enviamos al modelo el id para hacer la consulta y obtener sus Datos
        $respuesta = Datos::editarUsuarioModel($datosController, "usuarios");

        //Recibimos respuesta del modelo e IMPRIMOS UN FORM PARA Editar
        echo '<input type="hidden" value="'.$respuesta["id"].'" name="idEditar">
        <input type="text" value="'.$respuesta["usuario"].'" name="usuarioEditar" required>
        <input type="hidden" value="'.$respuesta["password"].'" name="passwordEditar" required>
        <input type="hidden" value="'.$respuesta["email"].'" name="emailEditar" required>
        <input type="submit" value="Actualizar">';

    }

    public function actualizarUsuario(){
        if(isset($_POST["usuarioEditar"])){
            //preparamos un array con los id de el form controlador anterior para ejecutar
            //la actulización en un modelo
            $datosController=array("id"=>$_POST["idEditar"],
                                    "usuario"=>$_POST["usuarioEditar"],
                                      "password"=>$_POST["passwordEditar"],
                                        "email"=>$_POST["emailEditar"]);
            //Enviar el array a el modelo que generará el UPDATE
            $respuesta=Datos::actualizarUsuarioModel($datosController,usuarios);

             if($respuesta=="success"){
                    header("location:index.php?action=cambio");
               }else{
                echo"error";
                    }
                }
    }

    public function borrarUsuario(){
        if(isset($_GET["idBorrar"])){
            $datosController = $_GET["idBorrar"];
            $respuesta = Datos::borrarUsuarioModel($datosController, "usuario");
            if($respuesta=="success"){
              header("location:index.php?action=usuarios");
             }
          }
    }

}
?>