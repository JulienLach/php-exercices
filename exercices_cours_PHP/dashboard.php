<?php
require_once 'auth.php';
// forcer_utilisateur_connecte();
// var_dump(est_connecte()); 
require_once 'header.php';
require_once 'compteur.php';
// $total = incrementPageCounter();
?>

<div>
    <h3>Visite totales</h3>
    <?php echo incrementPageCounter(); ?>
</div>





<?php require 'footer.php'; ?>