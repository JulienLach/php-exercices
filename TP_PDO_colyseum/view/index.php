<?php
require_once '../controller/afficher-client.php';

foreach ($clients as $client) {
    echo $client['id'] . ' ' . $client['lastName'] . ' ' . $client['firstName'] . '<br>';
}





?>