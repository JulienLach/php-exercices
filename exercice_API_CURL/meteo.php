<?php

$curl = curl_init('https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&hourly=temperature_2m,weather_code&forecast_days=1');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($curl);

if ($data === false) {
    var_dump(curl_error($curl));
} else {
    $data = json_decode($data, true);
    echo($data['hourly']['temperature_2m'][1]);
}

curl_close($curl);

?>
