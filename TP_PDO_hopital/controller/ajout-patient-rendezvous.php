<?php 
require_once '../model/patient.php'; 
?>

<?php
if(isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['mail']) && isset($_POST['birthdate'])&& isset($_POST['phone']) && isset($_POST['dateRdv'])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $mail = $_POST['mail'];
    $birthdate = $_POST['birthdate'];
    $phone = $_POST['phone'];
    $dateHour = $_POST['dateRdv'];
    $patient = new Patient();
    $patient->setLastname($lastname);
    $patient->setFirstname($firstname);
    $patient->setMail($mail);
    $patient->setBirthdate($birthdate);
    $patient->setPhone($phone);
    $patient->setDateHour($dateHour);
    
    $patient = $patient->addPatientsEtRendezvous();

    header("Location: ../view/liste-patients.php");
}



?>