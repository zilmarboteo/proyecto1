<?php

class ControladorFormularios
{

    # Registro 

    static public function ctrRegistro()
    {

        if (isset($_POST["registroNombre"])) {

            $table = "registros";

            $datos = array(
                "nombre" => $_POST["registroNombre"],
                "email"  => $_POST["registroEmail"],
                "password"  => $_POST["registroPassword"]
            );

            $respuesta = ModeloFormularios::mdlRegistro($table, $datos);

            return $respuesta;
        }
    }
}
