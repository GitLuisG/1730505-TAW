<?php
class Conexion{
    public function conectar(){
      $link = new PDO("mysql:host=localhost;dbname=practica2db","root","");
      return $link;
    }
}
 ?>
