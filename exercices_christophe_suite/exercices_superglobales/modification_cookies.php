<?php
// Anciens cookies obtenus avec le for
$ancienCookieLogin = $_COOKIE["login"];
$ancienCookiePassword = $_COOKIE["password"];

echo "<h2>Anciens cookies</h2>";
echo $ancienCookieLogin;
echo "<br>";
echo $ancienCookiePassword;

// Définir les nouveaux cookies dans une variable
$nouveauCookieLogin = "nouveau cookie login";
$nouveauCookiePassword = "nouveau cookie password";

// Redéfinir les cookies avec la méthode setcookie
setcookie("login", $nouveauCookieLogin, time()+15);
setcookie("password", $nouveauCookiePassword, time()+15);

echo "<h2>Nouveaux cookies</h2>";
echo $nouveauCookieLogin;
echo "<br>";
echo $nouveauCookiePassword;

?>



