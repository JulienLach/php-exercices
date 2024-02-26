<?php require_once '../model/profil-patient.php';

$patient = new ReadPatientById();
$patient = $patient->readPatientById();

require_once '../view/profil-patient.php';
?>