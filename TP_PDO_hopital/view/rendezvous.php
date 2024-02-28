<?php 
include_once 'header.php';
require_once '../controller/rendezvous.php';
?>


<h3>Informations du rendez-vous</h3>
<?php
echo "<strong>Date : </strong>" . $rendezVous['dateHour'] . '<br>';
echo "<strong>Nom du patient : </strong>" . $rendezVous['lastname'] . ' ' . $rendezVous['firstname'] . '<br>';




?>
<a href="modifier-rendezvous.php?id=<?php echo $_GET['id']; ?>">Modifier rendez-vous patient</a>