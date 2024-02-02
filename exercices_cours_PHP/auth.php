<?php

function est_connecte(): bool { // On déclare une fonction qui retourne un booléen
    if (session_status() === PHP_SESSION_NONE) { // Si la session n'est pas démarrée
        session_start(); // On la démarre
        echo 'Session démarrée';
    }
    return !empty($_SESSION['connecte']); // On retourne vrai si la session est non vide
}

function forcer_utilisateur_connecte(): void { // On déclare une fonction qui ne retourne rien
    if (!est_connecte()) { // Si l'utilisateur n'est pas connecté
        header('Location: /php-exercices/exercices_cours_PHP/login.php'); // On redirige vers la page de connexion
        exit();
    }
}


?>