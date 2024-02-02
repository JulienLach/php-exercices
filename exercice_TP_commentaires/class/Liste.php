<?php
require_once 'Message.php';

class Liste {

    private $fichier;

    public function __construct($fichier)
    {
        $directory = dirname($fichier);
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }
        if (!file_exists($fichier)) {
            touch($fichier);
        }
        $this->fichier = $fichier;
    }

    public function addMessage(Message $message)
    {
        file_put_contents($this->fichier, $message->toJSON() . PHP_EOL, FILE_APPEND);
    }

    public function getMessage() 
    {
        $content = trim(file_get_contents($this->fichier));
        $lines = explode(PHP_EOL, $content);
        $messages = [];
        foreach ($lines as $line) {
            $data = json_decode($line, true);
            
            $messages[] = new Message($data['username'], $data['message'], new DateTime('@' . $data['date']));
        }
        return array_reverse($messages);
    }
}




?>