<?php

Class ConexionDB {

    static public function conexion(){

        $link = new PDO ("mysql:host=localhost; dbname=mvc", "root", "");
        $link-> exec("set names utf8");
        
        return $link;
    }
}