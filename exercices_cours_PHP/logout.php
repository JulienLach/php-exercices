<?php 
session_start();
unset($_SESSION['connecte']);
header('Location: /php-exercices/exercices_cours_PHP/login.php')
?>