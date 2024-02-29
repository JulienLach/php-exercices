<?php require_once '../model/patient.php'; ?>

<?php
$patients = new Patient();
$patients = $patients->getAllPatients();

require_once '../view/liste-patients.php';
?>
