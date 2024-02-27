<?php require_once '../model/patient.php'; ?>

<?php
$patient = new Patient();
$patient = $patient->getPatientById();

?>