## Exercice créer une API REST en PHP sans Framework avec méthode CRUD

**Lien du cours/exercice en 3 partie**
*https://www.youtube.com/watch?v=OEWXbpUMODk*
*https://www.youtube.com/watch?v=-nq4UbD0NT8*
*https://www.youtube.com/watch?v=tG2U18EmIu4*

### Utilisation de Postman

- Pour faire tourner l'exo il faut poster les requêtes dans Postman
- Utilisation de CRUD pour les posts et les categories

1. GET pour Read
2. POST pour Create
3. PUT pour Update
4. DELETE pour Delete

Exememple de requete PUT HTTP dans Postman :
*http://jserveur.local/php-exercices/PHP_REST_API_exercice/api/category/update.php*

Ensuite dans l'onglet "Headers" il faut ajouter dans la "Key" -> "Content-Type" et dans la "Value" -> application/json

Ensuite aller dans l'onglet "Body", sélectioner "raw", et entrer mes données au format JSON pour appliquer la requête.

Exemple avec la requete UPDATE d'une catégorie :
{
"name": "Gaming UPDATED",
"id": "2"
}
Exemple avec la requete CREATE d'une catégorie :
{
"name": "Nouvelle catégorie Create"
}

Enfin cliquer sur "Send" pour exécuter la requete.

Si requete bien exécutée -> message de succès dans le body de retour

### Base de données

**Lien du serveur et phpmyadmin avec la BDD de l'exercice**
*http://jserveur.local/phpmyadmin/index.php?route=/database/structure&db=myblog*
