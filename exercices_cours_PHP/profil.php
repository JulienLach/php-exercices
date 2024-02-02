<?php
$title = "Profile"; 
include 'header.php';

// $nom = null;
// if (!empty($_GET['action']) && $_GET['action'] === 'deconnecter') { // Si l'utilisateur clique sur le lien "Se déconnecter"
//     unset($_COOKIE['utilisateur']); // On supprime le cookie
//     setcookie('utilisateur', '', time() - 10); // On le met à jour en lui donnant une date d'expiration dans le passé
// }
// if (!empty($_COOKIE['utilisateur'])) {
//     echo 'Bonjour ' . $_COOKIE['utilisateur'];
// }
// if (!empty($_POST['nom'])) {
//     setcookie('utilisateur', $_POST['nom']);
//     $nom = $_POST['nom'];
// }

// $user = [
//     'prenom' => 'John',
//     'nom' => 'Doe',
//     'age' => 18
// ];
// setcookie('utilisateur', serialize($user));




?>

<?php if ($nom): ?>
    <p>Bonjour <?php echo htmlentities($nom) ?></p>
    <a href="profil.php?action=deconnecter">Se déconnecter</a>
<?php else: ?>
    <form method="POST" action="">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="nom" name="nom" required placeholder="Entrez votre nom">
        <br>
        <input type="submit" value="Se connecter">
    </form>
<?php endif; ?>



<?php include 'footer.php'?>