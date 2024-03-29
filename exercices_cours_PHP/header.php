<?php 
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
require_once 'auth.php';?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>
        <?php if (isset($title)) {
          echo $title;
          }
           else {
            echo "mon site";
          }
          ?>
    </title>

  </head>
  <body>
    <nav>
      <div class="container">
        <div class="navbar">
          <ul>
            <?php require 'menu.php'; ?>
          </ul>
          <?php if (est_connecte()): ?>
            <span>Connecté en tant que Bob</span>
            <li><a href="/php-exercices/exercices_cours_PHP/logout.php">Se déconnecter</a></li>
          <?php endif; ?>
          </div>
      </div>
    </nav>
