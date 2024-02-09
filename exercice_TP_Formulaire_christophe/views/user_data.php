<?php
require_once '../controllers/controller.php';

echo "<h2>Vue des données saisies :</h2>";
echo "Email : " . $utilisateur->getEmail() . "<br>";
echo "Mot de passe : " . $utilisateur->getPassword() . "<br>";
echo "<br>";

// Appel de la méthode getUser pour récupérer les utilisateurs de la base de données
echo "<h2>Utilisateurs enregistrés :</h2>";
foreach ($utilisateur->getUser() as $user) { // Boucle pour afficher les utilisateurs de la base de données avec leur email et mot de passe
    echo "<strong>Email: </strong>" . $user['email'] . "<br>";
    echo "<strong>Password Hash: </strong>" . $user['password'] . "<br>";
    echo "<br>";
}

?>
