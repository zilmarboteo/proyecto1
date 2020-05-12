<?php

class conexion{

    static public function conectar(){

        #pdo(nombre del servidor; nombre de la base datos";"nombre usuario","contraseña)

        $link = new PDO("mysql:host=localhost;dbname=curso-php",
                        "root",
                        "");
        $link->exec("set names utf8");


        return $link;

    }

}
