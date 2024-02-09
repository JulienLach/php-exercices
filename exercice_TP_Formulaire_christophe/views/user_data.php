<?php
require_once '../controllers/controller.php';
require_once '../models/Database.php';

echo "<h2>connexion à a base de donnée :</h2>";
$tp_formulaire_mvc = new Database();
$tp_formulaire_mvc->connect();

echo "<h2>Vue des données saisies :</h2>";
echo "Email : " . $utilisateur->getEmail() . "<br>";
echo "Mot de passe : " . $utilisateur->getPassword();
?>
