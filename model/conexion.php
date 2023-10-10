<?php

// Conexion con la clase PDO 

class Conexion{
    static public function conectar(){
        $host="%";
        $dbname="wedding-rgp";
        $user="desarrollo";

        $conectar = new PDO ("mysql:host=$host;dbname=$dbname","$user","");

        $conectar-> exec("set names utf8mb3");


        return $conectar;

    }
}

?>