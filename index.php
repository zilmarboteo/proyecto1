<?php

#index: mostraremos la salida de las vistas al usurio y tambien a trabes de el vamos a enviar las distintas acciones que el usuario envie al controlador

require_once "controladores/plantilla.controlador.php";
require_once "controladores/formularios.controlador.php";
require_once "modelos/formularios.modelo.php";

$plantilla = new controladorplantilla();
$plantilla->ctrTraerPlantilla();
