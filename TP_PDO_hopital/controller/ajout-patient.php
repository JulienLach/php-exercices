<?php
require_once '../model/ajout-patient.php';

if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['birthdate']) && isset($_POST['phone']) && isset ($_POST['email'])) {
    // On peut mettre en paramètre de l'objet Patient les valeurs du formulaire directement ça va faire le lien avec le constructeur
    $patient = new Patient($_POST['lastname'], $_POST['firstname'], $_POST['birthdate'], $_POST['phone'], $_POST['email']);
    $patient->addPatient();
    header('Location: ../view/index.php');
}

?>