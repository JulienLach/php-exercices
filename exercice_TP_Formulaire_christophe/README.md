## TP Formulaire MVC et BDD

- D'abord se connecter à la base de donnée avec PDO et la méthode connect dans le fichier Database.php --- OK

- Afficher le message de connexion réussie si la connexion est établie --- OK

- Dans la class Utilisateur, connecter la base dans le constructeur, ne pas oublie de déclarer les variables public $connexion; et public $table = 'users';

- Créer une méthode addUser() dans le modèle utilisateur.php pour insérer les données dans la base de données

- Appeller cette méthode dans le contrôleur
