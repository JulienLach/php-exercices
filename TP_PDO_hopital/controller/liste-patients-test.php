<?php require_once '../model/patient.php'; ?>

<?php
$patients = new Patient();
$patients = $patients->getAllPatientsTEST();

$nombreTotalPatients = new Patient();
$nombreTotalPatients = $nombreTotalPatients->getNombreTotalPatients();
// echo $nombreTotalPatients;

$PatientsParPage = 2;
$nombrePages = ceil($nombreTotalPatients / $PatientsParPage);
echo $nombrePages;

// $premierPatient = ($pageActuelle * $PatientsParPage) - $PatientsParPage;
