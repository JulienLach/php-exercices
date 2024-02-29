<?php require_once '../model/patient.php'; ?>

<?php
if(isset($_POST['search'])) {
    $patients = new Patient();
    $patients = $patients->searchPatients();
}


// require_once '../view/liste-recherche-patients.php';
?>