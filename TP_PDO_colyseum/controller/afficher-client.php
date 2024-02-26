<?php
require_once '../model/afficher-client.php';
require_once '../model/database.php';

$clients = new ReadClients();
$clients = $clients->readClients();

$clientsLimit = new ReadClients();
$clientsLimit = $clientsLimit->readLimitClients();

$clientsCard = new ReadClients();
$clientsCard = $clientsCard->readClientsCard();

$clientsName = new ReadClients();
$clientsName = $clientsName->readClientsName();


require_once '../view/index.php'
?> 