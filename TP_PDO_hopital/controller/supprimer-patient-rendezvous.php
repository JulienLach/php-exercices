<?php require_once '../model/patient.php'; ?>

<?php
if(isset($_GET['id'])) {
    $patient = new Patient();
    $patient->setId($_GET['id']);
    $patient->deletePatientEtRdv();
}

header("Location: liste-patients.php");



?>