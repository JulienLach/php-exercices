<!-- https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&daily=weather_code&forecast_days=1 -->

<?php

$url = "https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&daily=weather_code&forecast_days=1";

// Uilisaiton de la fonction file_get_contents pour obtenir des données au format JSON
$JSONData = file_get_contents($url);

var_dump(parse_url($url)); // juste pour voir les détails de l'url

echo "<br>";
echo "<br>";

// Me retourne une chaine en format JSON
echo $JSONData;

// Transformer la chaine JSOn en tableau PHP
$PHParrayDatas = json_decode($JSONData, true);

// Access the "weather_code" value
$CodeMeteo = $PHParrayDatas['daily']['weather_code'][0];

// Afficher le CodeMétéo
echo "Code Météo : $CodeMeteo";

if($CodeMeteo == 61) {
    echo "<div> <img src='img/clouds.png'> </img></div>" ;
}
?>
