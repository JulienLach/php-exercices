<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'julien');
define('DB_PASS', 'mysqlpassword');
define('DB_NAME', 'php_dev');

// Créer la connexion
$connexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Vérifier la connexion
if($connexion->connect_error) {
    die('Connexion failed' . $connexion->connect_error);
}

?>