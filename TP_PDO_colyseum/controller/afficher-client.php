<?php
require_once '../model/afficher-client.php';
require_once '../model/database.php';

$clients = new ReadClients();
$clients = $clients->readClients();


require_once '../view/index.php'
?>