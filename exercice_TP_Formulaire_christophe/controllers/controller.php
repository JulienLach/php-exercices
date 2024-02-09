<?php
require_once '../models/utilisateur.php';
require_once '../models/Database.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email']; // les données sont nettoyées dans le constructeur de la classe Utilisateur dans le modèle
    $password = $_POST['password'];

    // Création d'une nouvelle instance de l'objet Utilisateur avec les 
    // données saisies en paramètres du constructeur
    $utilisateur = new Utilisateur;
    $utilisateur->setEmail($email);
    $utilisateur->setPassword($password);
}
require_once '../views/user_data.php'; // Le controleur renvois vers la vue

?>
