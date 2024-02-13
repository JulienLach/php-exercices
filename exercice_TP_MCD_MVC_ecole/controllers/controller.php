<?php
require_once '../models/Notes.php';
require_once '../models/Database.php';

$notes = new Notes();

require_once '../views/liste_des_notes.php'; // Le controleur renvois vers la vue

?>