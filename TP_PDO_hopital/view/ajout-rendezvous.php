<?php
require_once '../view/header.php';
require_once '../controller/liste-patients-rendezvous.php';
?>

<form class="form" action="../controller/ajout-rendezvous.php" method="POST">
<label for="dateRdv">Choisir une date de rendez-vous</label>
<input type="datetime-local" name="dateRdv" value="2020-02-28T12:30" min="2020-02-28T12:30" max="2024-02-28T12:30"/>
<label for="idPatient">Nom du patient</label><br>
<select name="idPatient">
<option value="">Choisir un patient</option>
<?php foreach($patients as $patient): ?>
<option value="<?= $patient['id'] ?>"><?= $patient['lastname'] ?></option>
<?php endforeach; ?>
</select>

<input type="submit" value="Créer un rendez-vous">
</form>


