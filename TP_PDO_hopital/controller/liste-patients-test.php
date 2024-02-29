<?php require_once '../model/patient.php'; 

$patientsParPage = 2;
$pageActuelle = 1;

echo "2 Patients maximum par page <br>";

$nombreTotalPatients = new Patient();
$nombreTotalPatients = $nombreTotalPatients->getNombreTotalPatients();
echo "Nombre de patients : " . $nombreTotalPatients . "<br>";

$nombrePages = ceil($nombreTotalPatients / $patientsParPage);
echo "Nombre de pages nécessaire : " .$nombrePages;

$premierPatient = ($pageActuelle * $patientsParPage) - $patientsParPage;

?>



<?php
$patients = new Patient();
$patients = $patients->getAllPatientsTEST($premierPatient, $patientsParPage);

// echo $nombreTotalPatients;


