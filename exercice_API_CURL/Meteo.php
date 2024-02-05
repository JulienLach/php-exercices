<?php
require_once "OpenWeather.php";

$meteo = new OpenWeather("49d8120fcfd33741453d50aa5c39c635"); // Creation d'un objet OpenWeather avec la clé API en paramètre
$weatherData = $meteo->getMeteo("Paris,fr"); // Appel de la méthode getMeteo avec la ville en paramètre

// Display temperature array
// var_dump($weatherData);
?>


<div class="container">
    <ul>
        <?php foreach ($weatherData as $data):?>
            <li><?php echo $data['date']->format('Y-m-d H:i:s')?> <?php echo $data['description']?> <?php echo $data['temp'] . "°C" ?></li>
        <?php endforeach ?>
    </ul>
</div>
