<?php

// Créer une classe OpenWeather qui permet de récupérer la météo d'une ville donnée.
class OpenWeather
{
    private $apiKey;

    public function __construct($apiKey) // Clé API OpenWeather
    {
        $this->apiKey = $apiKey; // Clé API OpenWeather fournie par l'utilisateur lors de l'instanciation de la classe
    }

    public function getMeteo($city)
    {
        $curl = curl_init("https://api.openweathermap.org/data/2.5/forecast?q=$city&appid=$this->apiKey&units=metric");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $data = curl_exec($curl);

        if ($data === false) {
            var_dump(curl_error($curl));
        } else {
            $data = json_decode($data, true);
            $weather = [];
            foreach ($data['list'] as $forecast) {
                $weather[] = [
                    'temp' => $forecast['main']['temp'],
                    'description' => $forecast['weather'][0]['description'],
                    'date' => new DateTime($forecast['dt_txt'])
                ];
            }
            return $weather;
        }

        curl_close($curl);
    }
}
