<?php require_once '../model/rendezvous.php'; ?>

<?php

if(isset($_POST['id'])) {

    $rendezVous = new RendezVous();
    $rendezVous->setId($_POST['id']);
    $rendezVous->setDateHour($_POST['dateHour']);
    $rendezVous->updateRendezVous();
}

header('Location: ../view/liste-rendezvous.php');

?>