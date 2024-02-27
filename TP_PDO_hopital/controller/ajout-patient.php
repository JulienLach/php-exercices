<?php require_once '../model/patient.php'; ?>

<?php
if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['mail']) && isset($_POST['birthdate'])&& isset($_POST['phone'])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $mail = $_POST['mail'];
    $birthdate = $_POST['birthdate'];
    $phone = $_POST['phone'];
    

    $patient = new Patient();
    $patient->setLastname($lastname);
    $patient->setFirstname($firstname);
    $patient->setmail($mail);
    $patient->setBirthdate($birthdate);
    $patient->setPhone($phone);

    $patient->addPatient();

    header("Location: ../view/index.php");
}
?>