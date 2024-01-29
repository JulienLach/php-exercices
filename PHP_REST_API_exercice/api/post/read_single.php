<?php

// Headers
header('Acces-Control-Allow-Origin: *'); // permet d'acceder à l'API publique par tout le monde, sans token sans authentification
header('Content-Type: application/json');

include_once '../../config/database.php'; // acceder à la page base de donnée
include_once '../../models/post.php'; // acceder aux posts

// Instancier un objet DB & s'y connecter
$database = new Database();
$db = $database->connect(); // le connect ici est celui qu'on a crée dans la page database.php

// Instancier un objet blog post
$post = new Post($db);

// Obtenir l'ID
$post->id = isset($_GET['id']) ? $_GET['id'] : die(); // ternaire ici pour avoir l'ID sinon rien

// GET post
$post->read_single();

// Créer l'array 
$post_array = array(
    'id' => $post->id,
    'title' => $post->title,
    'body' => $post->body,
    'author' => $post->author,
    'category_id' => $post->category_id,
    'category_name' => $post->category_name
);

// Make JSON
print_r(json_encode($post_array)); // print_r pour afficher l'array