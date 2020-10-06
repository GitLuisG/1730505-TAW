<?php

class Conexion{
  public function conectar(){
    $link = new PDO("mysql:host=".DATOS['DB_SERVER'].";dbname=".DATOS['DB_DATABASE']."","root","");
    return $link;
  }
}
 ?>
