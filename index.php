<?php

session_start();
require_once "controladores/plantilla.controlador.php";
require_once "controladores/slide.controlador.php";
require_once "controladores/utiles.php";

require_once "modelos/plantilla.modelo.php";
require_once "modelos/slide.modelo.php";

require_once "modelos/rutas.php";


$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();