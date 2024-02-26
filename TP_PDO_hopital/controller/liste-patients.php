<?php require_once '../model/liste-patients.php';

$patients = new ReadPatients();
$patients = $patients->readPatients();

require_once '../view/liste-patients.php';
?>