<?php require_once '../model/patient.php'; 

if(isset($_GET['page']) && !empty($_GET['page'])){
    $pageActuelle = (int) strip_tags($_GET['page']);
}else{
    $pageActuelle = 1;
}

$patientsParPage = 3;

echo "3 Patients maximum par page <br>";

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


