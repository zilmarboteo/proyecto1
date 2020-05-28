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

    #seleccionar registros 

    static public function ctrSeleccionarRegistros($item, $valor)
    {

        $table = "registros";

        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($table, $item, $valor);

        return $respuesta;
    }



    # ingreso

    public function ctrIngreso()
    {

        if (isset($_POST["ingresoEmail"])) {

            $table = "registros";
            $item  = "email";
            $valor = $_POST["ingresoEmail"];

            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($table, $item, $valor);

            if ($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]) {

                $_SESSION["validarIngreso"] = "ok";

                echo '<script>
            
                if (window.history.replaceState){
                
                    window.history.replaceState( null, null, window.location.href);
        
                }

            
                window.location = "index.php?pagina=inicio";
                
                </script>';
            } else {

                echo '<script>
            
                if (window.history.replaceState){
                
                    window.history.replaceState( null, null, window.location.href);
        
                }
                  </script>';

                echo '<div class="alert alert-danger"> Error al ingresar al sistema, el email o la contraseña no coinciden</div>';
            }
        }
    }

    # actualizar Registro 

   static public function ctrActualizarRegistro()
    {

        if (isset($_POST["actualizarNombre"])) {

            if ($_POST["actualizarPassword"] != "") {

                $password = $_POST["actualizarPassword"];
            } else {

                $password = $_POST["passwordActual"];
            }

            $table = "registros";

            $datos = array("id" => $_POST["idUsuario"],
                "nombre" => $_POST["actualizarNombre"],
                "email"  => $_POST["actualizarEmail"],
                "password"  => $password);

            $respuesta = ModeloFormularios::mdlActualizarRegistro($table, $datos);

            return $respuesta;

        }
    }

      # Eliminar Registro 

      public function ctrEliminarRegistro(){

        if (isset($_POST["eliminarRegistro"])) {
            
            $table = "registros";
            $valor = $_POST["eliminarRegistro"];

            $respuesta = ModeloFormularios::mdlEliminarRegistro($table, $valor);

            if($respuesta == "ok"){

                echo '<script>
            
                    if (window.history.replaceState){
                    
                        window.history.replaceState( null, null, window.location.href);
            
                    }

                    window.location = "index.php?pagina=inicio";
                
                </script>';
            }

        }
    }
}
