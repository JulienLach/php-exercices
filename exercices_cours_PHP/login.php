<?php require_once 'header.php'; 
$erreur = null;
if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) { // Si le formulaire est soumis
    if ($_POST['pseudo'] === 'bob' && $_POST['motdepasse'] === 'test') { // Si le mot de passe est bon
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: /php-exercices/exercices_cours_PHP/dashboard.php');
        exit();
    } else {
        $erreur = 'Identifiants incorrects';
    }
}


require_once 'auth.php';
if (est_connecte()) { // Si l'utilisateur est déjà connecté
    header('Location: /php-exercices/exercices_cours_PHP/dashboard.php'); // On le redirige vers la page d'accueil
    exit(); // On arrête l'exécution de la suite du script car pas besoin
}

?>

<h1>Se connecter</h1>

<?php if ($erreur): ?>
    <div style="background-color: #FFCCCB;">
        <?php echo $erreur ?>
    </div>
<?php endif; ?>

<form action="" method="POST">
    <div>
        <input type="text" name="pseudo" placeholder="Nom d'utilisateur">
    </div>
    <div>
    <input type="password" name="motdepasse" placeholder="Votre mot de passe">
    </div>
    <button type="submit">Se connecter</button>
</form>




<?php require 'footer.php'; ?>