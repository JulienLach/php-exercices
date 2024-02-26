<?php include_once 'header.php' ;?>


<form class="form" action="../controller/ajout-patient.php" method="POST">
<h3>Créer un patient</h3>
    <input class="text-form" type="text" name="lastname" id="" placeholder="Nom">
    <input class="text-form" type="text" name="firstname" id="" placeholder="Prénom">
    <label for="birthdate">Date de naissance</label>
    <input class="text-form" type="date" name="birthdate" placeholder="Date de naissance">
    <input class="text-form" type="tel" name="phone" placeholder="Numéro de téléphone">
    <input class="text-form" type="email" name="email" placeholder="Email">
    <button class="create-account-btn" type="submit">Créer un patient</button>
</form>