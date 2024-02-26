<?php 
include_once 'header.php';
require_once '../controller/profil-patient.php';
?>


<h3>Profil du patient</h3>
<?php

echo "Nom : " . $patient['lastname'] . '<br>';
echo "Prénom : " . $patient['firstname'] . '<br>';
echo "Date de naissance : " .$patient['birthdate'] . '<br>';
echo " Téléphone : " . $patient['phone'] . '<br>';
echo "Email : " . $patient['mail'] . '<br>';


?>