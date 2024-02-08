<?php
require_once '../controllers/controller.php';

    echo "<h2>Vue des données saisies :</h2>";
    echo "Email : " . $utilisateur->getEmail() . "<br>";
    echo "Mot de passe : " . $utilisateur->getPassword();

?>