<?php require_once '../model/rendezvous.php'; ?>

<?php
$rendezVous = new RendezVous();
$rendezVous = $rendezVous->getRdvById();

$rendezVousInfos = new RendezVous();
$rendezVousInfos = $rendezVousInfos->getRdvByIdInfos();
?>