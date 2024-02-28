<?php require_once '../model/rendezvous.php'; ?>

<?php

if(isset($_GET['id'])) {

    $rendezVous = new RendezVous();
    $rendezVous->setId($_GET['id']);
    $rendezVous->deleteRendezVous();
}

header('Location: ../view/liste-rendezvous.php');

?>