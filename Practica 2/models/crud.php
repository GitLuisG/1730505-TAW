<?php
require_once "conexion.php";

class Datos extends Conexion {
    public function reegistroUsuarioModel($datosModel, $tabla){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(usuario, contrasena, email) VALUES (:usuario, :password, :email)");
        $stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datosModel["contrasena"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
        if($stmt->execute()){
            return "success";
        }
        else{
            return "error";
        }
        $stmt->close();
    }
}