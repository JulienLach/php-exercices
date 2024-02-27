<?php
require_once '../model/profil-patient.php';
require_once '../model/ajout-patient.php';

if (isset ($_GET['id'])) {
    $patient = (new ReadPatientById())->readPatientById();
}

if (isset ($patient['lastname'], $patient['firstname'], $patient['birthdate'], $patient['phone'], $patient['mail'])) {

    $patientupdate = new Patient($patient['lastname'], $patient['firstname'], $patient['birthdate'], $patient['phone'], $patient['mail']);
    $patientupdate->updatePatient();
}

?>
