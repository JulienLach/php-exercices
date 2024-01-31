<?php

// Ce fichier va intéragir avec le dossier modèle et le fichier category.php
// On va intéragir avec une API et requetes HTTP

// Headers
header('Access-Control-Allow-Origin: *'); // permet d'acceder à l'API publique par tout le monde, sans token sans authentification
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


include_once '../../config/database.php'; // acceder à la page base de donnée
include_once '../../models/category.php'; // acceder aux categories

// Instancier un objet DB & s'y connecter
$database = new Database();
$db = $database->connect(); // le connect ici est celui qu'on a crée dans la page database.php

// Instancier un objet category
$category = new Category($db);

// GET la data qui est postée sur Postman
// Ici cela va récupérer n'importe quelle donnée qui est envoyée avec Postman dans l'onglet Headers ->
// Ensuite cliquer sur ----------------
$data = json_decode(file_get_contents("php://input")); 

// Mettre la data récupérée dans une category
$category->name = $data->name;

// Créer la category
if($category->create()) {
    echo json_encode(
        array('message' => 'Catégorie créée')
    );
} else {
    echo json_encode(
        array('message' => 'Catégorie non créée')
    );
}
// En PHP je doit formater mes tableaux en JSON pour contrairement au JavaScript ou le JSON et directement un objet JavaScript