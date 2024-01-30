<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage Cookies PHP</title>
</head>
<body>

<h2>Affichage Cookies PHP</h2>

<?php
echo $_COOKIE["login"];
echo "<br>";
echo $_COOKIE["password"];
?>
<br>

<a href="./modification_cookies.php">Lien vers les cookies modifiés</a>

</body>
</html>
