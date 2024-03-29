<?php

// Ce fichier va intéragir avec le dossier modèle et le fichier category.php
// On va intéragir avec une API et requetes HTTP

// Headers
header('Access-Control-Allow-Origin: *'); // permet d'acceder à l'API publique par tout le monde, sans token sans authentification
header('Content-Type: application/json');

include_once '../../config/database.php'; // acceder à la page base de donnée
include_once '../../models/category.php'; // acceder aux categories

// Instancier un objet DB & s'y connecter
$database = new Database();
$db = $database->connect(); // le connect ici est celui qu'on a crée dans la page database.php

// Instancier un objet category
$category = new Category($db);

// Lire les categories avec la requete et la fonction read()
$result = $category->read();
// Avoir le nombre de ligne
$nombre = $result->rowCount();

// Vérifier si il y a des categories
if($nombre > 0) {
    // Créer un tableau des categories
    $categories_array = array();
    $categories_array['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $category_item = array(
            'id' => $id,
            'name' => $name
        );

        // Push chaque categories vers le array ['data']
        array_push($categories_array['data'], $category_item);
    }
    
    // Transformer notre tableau PHP avec les categories en JSON et sortir les valeurs JSON
    echo json_encode($categories_array);

} else { // Si pas de categories trouvées
    echo json_encode(
        array('message' => 'Pas de cateories trouvés')
    );
}

?>