<?php

require_once "controllers/PlantillaController.php";
require_once "controllers/FormularioController.php";
require_once "models/Formulario.php";


$plantilla = new PlantillaController();
$plantilla -> index();