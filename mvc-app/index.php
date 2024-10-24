<?php

require 'model/model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $city_id = $_POST['city'];
    $budget = $_POST['budget'];

    $city = get_city($city_id);

    // Obtener el clima actual usando la API de clima (ejemplo OpenWeatherMap)
    $weather_api_key = '9ba2b3de16dbd686ef0139c33bc68ced';
    $city_name = urlencode($city['name']);
    $weather_url = "https://api.openweathermap.org/data/2.5/weather?q={$city_name}&appid={$weather_api_key}&units=metric";
    $weather_data = json_decode(file_get_contents($weather_url), true);
    $current_temp = $weather_data['main']['temp'];

    // Calcular el cambio de moneda
    $local_budget = $budget * $city['exchange_rate'];

    include 'view/view.php';
} else {
    $cities = get_all_cities();
    include 'view/form.php';
}
?>
