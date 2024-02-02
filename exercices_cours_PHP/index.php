<?php 
session_start(); // On démarre la session AVANT tout le reste du code
// La session ne persiste que pendant la durée de vie de la page dès qu'on quitte la page la session est détruite
$_SESSION['role'] = 'administrateur'; // On définit une variable de session
$title = "Page d'accueil"; 
include 'header.php';
?>  <!--include pour appeler une page dans un sous dossier -->


    <div class="container">
      <h2>Suite cours PHP</h2>
    </div>
  </body>
</html>

<?php include 'footer.php'?>