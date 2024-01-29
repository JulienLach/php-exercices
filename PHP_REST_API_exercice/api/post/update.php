<?php

// Ce fichier va intéragir avec le modèle et le fichier post.php
// On va intéragir avec une API et requetes HTTP

// Headers
header('Access-Control-Allow-Origin: *'); // permet d'acceder à l'API publique par tout le monde, sans token sans authentification
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


include_once '../../config/database.php'; // acceder à la page base de donnée
include_once '../../models/post.php'; // acceder aux posts

// Instancier un objet DB & s'y connecter
$database = new Database();
$db = $database->connect(); // le connect ici est celui qu'on a crée dans la page database.php

// Instancier un objet blog post
$post = new Post($db);

// GET la data qui est postée
$data = json_decode(file_get_contents("php://input")); // Ici cela va récupérer n'importe quelle donnée qui est envoyée

// Set le ID pour pouvoir UPDATE
$post->id = $data->id;

// Mettre la data récupérée dans un post
$post->title = $data->title;
$post->body = $data->body;
$post->author = $data->author;
$post->category_id = $data->category_id;

// UPDATE le post
if($post->update()) {
    echo json_encode(
        array('message' => 'Post mis à jour')
    );
} else {
    echo json_encode(
        array('message' => 'Post non mis à jour')
    );
}
// En PHP je doit formater mes tableaux en JSON pour contrairement au JavaScript ou le JSON et directement un objet JavaScript


?>