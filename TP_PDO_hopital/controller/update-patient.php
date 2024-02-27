<?php require_once '../model/patient.php'; ?>

<?php

if(isset($_POST['id'])) {

    $patient = new Patient();
    $patient->setId($_POST['id']);
    $patient->setLastname($_POST['lastname']);
    $patient->setFirstname($_POST['firstname']);
    $patient->setBirthdate($_POST['birthdate']);
    $patient->setPhone($_POST['phone']);
    $patient->setMail($_POST['mail']);
    $patient->updatePatient();
}

header("Location: ../view/liste-patients.php");
?>