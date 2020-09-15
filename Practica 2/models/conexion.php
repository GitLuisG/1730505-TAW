<?php
class Conexion{
    public function conectar(){
        $link = new PDO("mysql:localhost=;dbname=practica2db","root","root");
        return $link;
    }
}