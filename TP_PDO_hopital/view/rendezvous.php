<?php 
include_once 'header.php';
require_once '../controller/rendezvous.php';
?>


<h3>Informations du rendez-vous</h3>
<?php
echo "<strong>Date : </strong>" . $rendezVousInfos['dateHour'] . '<br>';
echo "<strong>Nom du patient : </strong>" . $rendezVousInfos['lastname'] . ' ' . $rendezVousInfos['firstname'] . '<br>';




?>
<a href="modifier-rendezvous.php?id=<?php echo $_GET['id']; ?>">Modifier rendez-vous patient</a>