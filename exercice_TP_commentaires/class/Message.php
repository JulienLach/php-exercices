<?php

class Message {

    const LIMIT_USERNAME = 3;
    const LIMIT_MESSAGE = 10;
    private $username;
    private $message;
    public $date;

    public function __construct($username, $message, ?DateTime $date = null) {
        $this->username = $username;
        $this->message = $message;
        $this->date = $date ?? new DateTime(); // Si la date est null, on crée une nouvelle instance de DateTime
    }

    public function isValid(): bool {
        return empty($this->getErrors()); // Renvois true si le tableau est vide donc si il n'y a pas d'erreurs
    }

    public function getErrors() {
        $errors = [];
        if (strlen($this->username) < self::LIMIT_USERNAME) {
            $errors['username'] = "Votre pseudo est trop court";
        }
        if (strlen($this->message) < self::LIMIT_MESSAGE) {
            $errors['message'] = "Votre message est trop court";
        }
        return $errors;
    }


    public function toHTML()
    {
        $username = htmlentities($this->username);
        $date = $this->date->format('d/m/Y à H:i');
        $message = htmlentities($this->message);
        return <<<HTML
        <p> 
            <strong>{$username}</strong> <em>le {$date} </em><br> {$message}
        </p>
HTML;
}

    public function toJSON(): string { // Transforme le message reçu en JSON
        return json_encode([
            'username' => $this->username,
            'message' => $this->message,
            'date' => $this->date->getTimestamp()
        ]);
    }
}




?>