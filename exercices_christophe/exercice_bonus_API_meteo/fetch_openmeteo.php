<!-- https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&daily=weather_code&forecast_days=1 -->

<!--
1. On fetch l'api openmeteo
2. On récupère un JSON avec la fonction file_get_contents
3. On transforme ce JSON en tableau PHP avec json_decode
4. On parcours ce tableau PHP en allant jusqu'a 'weather_code' en prennant l'index 0 du sous tableau weather code
5. On affiche le code Météo
6. On affiche une image en fonction du code météo
-->

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

echo "<br>";


// Access the "weather_code" value
$CodeMeteo = $PHParrayDatas['daily']['weather_code'][0];

// Afficher le CodeMétéo
echo "Code Météo : $CodeMeteo";

if($CodeMeteo == 61) {
    echo "<div> <img src='img/clouds.png'> </img></div>" ;
}
?>
