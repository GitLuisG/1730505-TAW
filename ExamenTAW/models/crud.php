<?php


require_once "conexion.php";
// modelo que permite el enlace de las paginas con las vistas

class Datos extends Conexion{

    public function ingresoUsuarioModel($datosModel){
        //Preparamos el PDO
        $stmt=Conexion::conectar()->prepare("SELECT `usuario`, `contrasena` FROM usuarios WHERE usuario = :usuario");
        $stmt->bindParam(":usuario", $datosModel["usuario"],PDO::PARAM_STR);
        //Ejecutamos la consulta en PDO
        $stmt->execute();
        //Retornamos el fetch que es el que obtiene una fila o posición de un array
        return $stmt->fetch();
        //Cerramos el PDO
        $stmt->close();
    }

    public static function registroUsuarioModel($datosModel){
      //Preparar el modelo para hacer los INSERT
      $stmt = Conexion::conectar()->prepare("INSERT INTO `usuarios`(`usuario`, `contrasena`, `email`)
      VALUES (:usuario,:password,:email)");

      //prepare() Prepara una sentencia SQL para ser ejecutada por el método PDOStatement::execute();

      //bindParam() vincula el valor de una variable de PHP en un parámetro de sustitucion
      //con nombre o signo de interrogacion correspondiente. Es la sentencia usada para preparar un query de SQLite3

      $stmt->bindParam(":usuario",$datosModel["usuario"], PDO::PARAM_STR);
      $stmt->bindParam(":password",$datosModel["password"], PDO::PARAM_STR);
      $stmt->bindParam(":email",$datosModel["email"], PDO::PARAM_STR);

    if($stmt-> execute()){
        return "succsess";
    }else{
        return "error";
    }

    // cerrrar las funciones de las sentencias de pdo
    $stmt ->close();
    }

    public static function vistaUsuariosModel($datosModel){
        //Preparamos el PDO
        $stmt=Conexion::conectar()->prepare("SELECT * FROM usuarios");
        //Ejecutamos la consulta en PDO
        $stmt->execute();
        //Retornamos el fetch que es el que obtiene una fila o posición de un array
        return $stmt->fetchAll();
        //Cerramos el PDO
        $stmt->close();
    }

    public static function vistaLibrosModel(){
        //Preparamos el PDO
        $stmt=Conexion::conectar()->prepare("SELECT * FROM libros");
        //Ejecutamos la consulta en PDO
        $stmt->execute();
        //Retornamos el fetch que es el que obtiene una fila o posición de un array
        return $stmt->fetchAll();
        //Cerramos el PDO
        $stmt->close();
    }
}

?>