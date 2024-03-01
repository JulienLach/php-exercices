<?php
require_once '../view/header.php';
?>

<form class="form" action="../controller/ajout-patient-rendezvous.php" method="POST">
    <label for="lastname">Nom</label>
    <input type="text" name="lastname" id="lastname">
    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" id="firstname">
    <label for="birthdate">Date de naissance</label>
    <input type="date" name="birthdate" id="birthdate">
    <label for="phone">Téléphone</label>
    <input type="tel" name="phone" id="phone">
    <label for="mail">Mail</label>
    <input type="email" name="mail" id="mail">
    <label for="dateRdv">Choisir une date de rendez-vous</label>
    <input type="datetime-local" name="dateRdv" value="2020-02-28T12:30" min="2020-02-28T12:30" max="2024-02-28T12:30"/>
    <input type="submit" value="Ajouter un patient & un rendez-vous">
</form>