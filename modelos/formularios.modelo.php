<?php

require_once "conexion.php";

class ModeloFormularios


{

    //registro 

    static public function mdlRegistro($table, $datos)
    {

        #statement: declaracion
        #prepare() prepara una sentecia sql para ser ejecutada por el metodo PDOStatement:: execute(). la sentecia sql puede contener cero o mas marcadores de parametros
        #con nombre (:name) o signos de interrogacion (?) por los culaes los valores reales seran sustituidos cuando la sentecia sea ejecutada 
        #ayda a prevenir intecciones sql eliminando la necesidad de entrecomillar manualmente los parametros.

        $stmt = conexion::conectar()->prepare("INSERT INTO $table (nombre , email, password) VALUES 
        (:nombre , :email, :password)");

        #bindparam() vincula una variable de php aun parametro de sustitucion con nombre o de signo de interrogacion correspondiente de la sentencia sql que fue usada para preparar la sentacia.

        $stmt->bindParam("nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam("email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam("password", $datos["password"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(conexion::conectar()->errorInfo());
        }
    }

    #seleccionar Registros

    static public function mdlSeleccionarRegistros($table, $item, $valor)
    {

        if ($item == null && $valor == null) {

            $stmt = conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%y') AS 
                fecha FROM $table ORDER BY id DESC");

            $stmt->execute();

            return $stmt->fetchAll();
        } else {

            $stmt = conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%y') AS fecha 
                FROM $table WHERE $item = :$item ORDER BY id DESC");

            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();
        }
    }

    //actualizar registro

    static public function mdlActualizarRegistro($table, $datos)
    {

        $stmt = conexion::conectar()->prepare("UPDATE $table SET nombre=:nombre, email=:email, password=:password WHERE id = :id");


        $stmt->bindParam("nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam("email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam("password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam("id", $datos["id"], PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(conexion::conectar()->errorInfo());
        }
    }

    //Eliminar registro

    static public function mdlEliminarRegistro($table, $valor)
    {

        $stmt = conexion::conectar()->prepare("DELETE FROM  $table WHERE id = :id");

        $stmt->bindParam(":id", $valor, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";

        } else {
            
            print_r(conexion::conectar()->errorInfo());
        }
    }

}
