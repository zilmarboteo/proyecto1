<?php

class ControladorFormularios
{

    # Registro 

    static public function ctrRegistro()
    {

        if (isset($_POST["registroNombre"])) {

            return "ok";



            //  $_POST["registroNombre"] . "<br>" . $_POST["registroEmail"] . "<br>" . $_POST["registroPassword"] . "<br>";
        }
    }
}
