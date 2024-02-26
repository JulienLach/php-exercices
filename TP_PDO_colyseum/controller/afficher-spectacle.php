<?php
require_once '../model/afficher-spectacle.php';


$spectacles = new ReadSpectacles();
$spectacles = $spectacles->readSpectacles();