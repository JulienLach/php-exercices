<?php require_once '../model/rendezvous.php';?>

<?php
if(isset($_POST['dateRdv']) && isset($_POST['idPatient'])) {
$rendezVous = new RendezVous();
$rendezVous->setDateHour($_POST['dateRdv']);
$rendezVous->setIdPatients($_POST['idPatient']);
$rendezVous->addRendezVous();
}

header('Location: ../view/ajout-rendezvous.php');
?>