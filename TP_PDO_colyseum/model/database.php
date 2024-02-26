<?php
// Faire en singleton
class Database
{
    static private $instance = null;
    public static function connect()
    {
        // Si aucune instance n'existe on en crée
        if (is_null(self::$instance)) {
       self::$instance = new PDO('mysql:host=localhost;dbname=TP_PDO_colyseum', 'julien', 'mysqlpassword');
        }
        // Sinon on retourne l'instance existante
        return self::$instance;
    }
}
?>