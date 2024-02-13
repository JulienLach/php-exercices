<?php
require_once '../controllers/controller.php';

echo "<h2>Notes enregistrés :</h2>";
foreach ($notes->getNotes() as $note) { // Boucle pour afficher les utilisateurs de la base de données avec leur email et mot de passe
    echo $note['note']. " " . $note['prenom'] . " " . $note['nom'] . "<br>";
}
?>