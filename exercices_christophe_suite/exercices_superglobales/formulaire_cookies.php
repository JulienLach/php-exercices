<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Cookies PHP</title>
</head>
<body>

<h2>Formulaire Cookies PHP</h2>

<form method="get" action="">
    <label for="login">Login :</label>
    <input type="text" id="login" name="login" required>

    <label for="password">Password :</label>
    <input type="text" id="password" name="password" required>

    <input type="submit" value="Envoyer">
</form>
<br>

<a href="./affichage_cookies.php">Lien vers affichage cookies</a>

<?php
if (isset($_GET['login']) && isset($_GET['password'])) {
    setcookie("login",$_GET['login'], time()+10);
    setcookie("password",$_GET['password'], time()+10);
}
?>

</body>
</html>
