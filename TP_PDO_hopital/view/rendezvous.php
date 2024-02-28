<?php 
include_once 'header.php';
require_once '../controller/rendezvous.php';
?>


<h3>Informations du rendez-vous</h3>
<?php
echo "<strong>Date : </strong>" . $rendezVous['dateHour'] . '<br>';
echo "<strong>Nom du patient : </strong>" . $rendezVous['lastname'] . ' ' . $rendezVous['firstname'] . '<br>';




?>