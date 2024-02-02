<?php
$title = "NSFW User";
include 'header.php';
?>

<?php 
$age = null;
if (!empty($_POST['datedenaissance'])) { // Si le formulaire a été soumis et qu'on a récupéré une date de naissance
    setcookie('datedenaissance', $_POST['datedenaissance']); // On sauvegarde la date de naissance dans un cookie
    $_COOKIE['datedenaissance'] = $_POST['datedenaissance']; // On met à jour la variable $_COOKIE pour qu'elle soit disponible dans le script courant
}
if (!empty($_COOKIE['datedenaissance'])) { // Si on a récupéré une date de naissance dans les cookies
    $age = (int)date('Y') - $_COOKIE['datedenaissance']; // On calcule l'age de l'utilisateur
}
?>


<!-- Demander à l'utilisateur sa date de naissance -->
<!-- Sauvegarder la date de naissance dans un cookie -->
<!-- Si le user est assez agé il peut acceder au site -->
<!-- Sinon on affiche un message d'erreur -->

<?php if ($age >= 18): ?>
    <h1>Bienvenue sur le site de contenu réservé</h1>
<?php elseif ($age !== null): ?>
    <h1>Vous n'êtes pas autorisé à accéder à ce site</h1>
<?php else: ?>
<form action="" method="POST">
    <label for="datedenaissance">Date de naissance :</label>
    <select name="datedenaissance">
        <?php
        for ($year = 1920; $year <= 2010; $year++) {
            echo "<option value=\"$year\">$year</option>";
        }
        ?>
    </select>
    <br>
    <input type="submit" value="Valider mon age">
</form>
<?php endif; ?>






<?php include 'footer.php'?>