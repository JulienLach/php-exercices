<?php
require_once '../model/afficher-type-spectacle.php';
require_once '../model/database.php';

$spectaclesTypes = new ReadSpectaclesTypes();
$spectaclesTypes = $spectaclesTypes->readSpectaclesTypes();


require_once '../view/index.php'
?>