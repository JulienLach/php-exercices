<?php
// Déclarer les variables d'accès à la base de donnée
$host = 'localhost'; // question christophe, pourquoi jserveur.local ne marche pas ? // a cause de nos paramètre initiaux  de la base de donnée
$user = 'julien';
$password = 'mysqlpassword';
$dbname = 'pdo_posts';

// Configurer le DSN (Le Data Source Name (DSN))
// DSN PDO_MYSQL pour se connecter aux bases de données MySQL :
$dsn = "mysql:host=$host;dbname=$dbname";
// Créer une instance PDO
$pdo = new PDO($dsn, $user, $password);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


// PDO query méthode pour faire ma requête SQL
// $statement = $pdo->query('SELECT * FROM posts');


// while($row = $statement->fetch(PDO::FETCH_ASSOC)){
//     echo $row['title'] . "<br>" . $row['body'] . "<br>";}

// while($row = $statement->fetch(PDO::FETCH_OBJ)){
//     echo $row->title . "<br>";}


// Requêtes préparées et procédures stockées (préparée et exécutée)

// MAUVAISE METHODE NON SECURISÉE :
// $sql = "SELECT * FROM posts WHERE author = '$author'";
// Laisse la possibilité de faire des injections SQL par exemple avec le $author du formulaire
// Les requềtes préparées séparent le statement des données !

// CRUD EXPLIQUé a partir d'ici
// FETCH Tous les posts

// User input
// $author = 'bob';
// $is_published = true;
// $id = 1;

// Paramètres positionels pour récupérer les posts dans la BDD
// $sql = 'SELECT * FROM posts WHERE author = ?';
// $statement = $pdo->prepare($sql); // méthode prepare() pour préparer le retour de la requête
// $statement->execute([$author]); // executer le statement et stocker le résultat dans un array
// $posts = $statement->fetchAll(PDO::FETCH_OBJ); // Fetch objects instead of arrays

// var_dump($posts)

// Faire une boucle pour afficher tous les posts
// foreach($posts as $post) {
//     echo $post->title . "<br>";
//     echo $post->body . "<br>"; // afficher aussi le body field dans la BDD
//     echo "<br>";
// }


// Paramètres nommés
// $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
// $statement = $pdo->prepare($sql);
// $statement->execute(['author' => $author, 'is_published' => $is_published]); 
// $posts = $statement->fetchAll(PDO::FETCH_OBJ);

// foreach($posts as $post) {
//     echo $post->title . "<br>";
//     echo $post->body . "<br>"; // afficher aussi le body field dans la BDD
//     echo "<br>";
// }


// Fetch un seul post
// $sql = 'SELECT * FROM posts WHERE id = :id';
// $statement = $pdo->prepare($sql);
// $statement->execute(['id' => $id]); 
// $post = $statement->fetch(PDO::FETCH_OBJ);
// echo $post->title;
// echo $post->body;


// GET ROW COUNT
// $statement = $pdo->prepare(('SELECT * FROM posts WHERE author = ?'));
// $statement->execute([$author]);
// $postCount = $statement->rowCount();

// echo $postCount;


// INSERER DES DONNEES
// $title = 'Post 5';
// $body = "Fixa inpenderet comes uno inopia Honoratus et intempestivam efferatus Antiochensis intempestivam Antiochensis ei ni elogio.";
// $author = "Bill";

// $sql = 'INSERT INTO posts(title, body, author) VALUE(:title, :body, :author);';
// $statement = $pdo->prepare($sql);
// $statement->execute(['title' => $title, 'body' => $body, 'author' => $author]);
// echo 'Post Added';


// METTRE A JOUR DES DONNEES
// $id = 1;
// $body = "Updated post Fixa inpenderet comes uno et intempestivam efferatus Antiochensis intempestivam Antiochensis ei ni elogio.";

// $sql = 'UPDATE posts SET body = :body WHERE id = :id;';
// $statement = $pdo->prepare($sql);
// $statement->execute(['body' => $body, 'id' => $id]);
// echo 'Post Updated';

// SUPPRIMER DES DONNEES
// $id = 3;
// $body = "Updated post Fixa inpenderet comes uno et intempestivam efferatus Antiochensis intempestivam Antiochensis ei ni elogio.";

// $sql = 'DELETE FROM posts WHERE id = :id;';
// $statement = $pdo->prepare($sql);
// $statement->execute(['id' => $id]);
// echo 'Post Deleted';


// CHERCHER DES DONNEES
$search = "%Po%";
$sql = 'SELECT * FROM posts WHERE title LIKE ?;';
$statement = $pdo->prepare($sql);
$statement->execute([$search]);
$posts = $statement->fetchAll(PDO::FETCH_OBJ);

foreach($posts as $post) {
    echo $post->title .'<br>';
}

?> 



