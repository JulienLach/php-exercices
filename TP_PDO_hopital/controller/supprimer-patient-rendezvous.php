<?php require_once '../model/patient.php'; ?>

<?php
if(isset($_GET['id'])) {
    $patient = new Patient();
    $patient->setId($_GET['id']);
    $patient->deletePatientEtRdv();
}

// Ajouter un refresh pour revenir à la liste des patients à jour avec le Delete
// Sinon la page se recharge avec le cache et l'ID supprimé n'est pas lu donc erreur
header('Refresh: 0; url=http://jserveur.local/php-exercices/TP_PDO_hopital/view/liste-patients.php');

?>