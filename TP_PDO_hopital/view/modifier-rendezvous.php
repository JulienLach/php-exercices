<?php 
include_once 'header.php';
require_once '../controller/rendezvous.php';
?>

<form class="form" action="../controller/modifier-rendezvous.php" method="POST">
    <h3>Modifier le rendez vous</h3>
    <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
    <label for="dateRdv">Modifier la date de rendez-vous</label>
    <input type="datetime-local" name="dateHour" value="<?= $rendezVousInfos['dateHour'] ;?>" min="2020-02-28T12:30" max="2024-02-28T12:30"/>
    <input type="submit" value="Modifier le rendez-vous">
</form>

</body>
</html>