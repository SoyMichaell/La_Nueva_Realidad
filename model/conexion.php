<?php

class Conexion extends PDO{
    public function __construct(){
        try {
            parent::__construct("mysql:host=localhost;dbname=la_nueva_realidad_2","root","");
            parent::exec("set names utf8");
        } catch (Exception $e) {
            echo "Error al conectarse a la base de datos", $e->getMessage();
        }
    }
}

?>