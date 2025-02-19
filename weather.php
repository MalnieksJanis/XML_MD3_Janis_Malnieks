<?php
// Iestatījumi
$city = "Riga"; // Izvēlies pilsētu
$apikey = "TAVS_API_KEY"; // Ievieto savu API atslēgu
$unit = "metric"; // Temperatūras mērvienība (Celsius)

// URL pieprasījumam
$url = "http://api.openweathermap.org/data/2.5/weather?q=$city&mode=xml&appid=$apikey&units=$unit";

// Iegūst XML datus no API
$response = file_get_contents($url);

// Pārvērš XML datus par vienkāršu PHP objektu
$xml = simplexml_load_string($response);

// Iegūst nepieciešamos datus
$temperature = $xml->temperature['value'];
$humidity = $xml->humidity['value'];
$pressure = $xml->pressure['value'];
$weather = $xml->weather['value'];
$wind_speed = $xml->wind->speed['value'];
$wind_direction = $xml->wind->direction['value'];

// Attēlo laika apstākļus
echo "<p><strong>Temperatūra:</strong> $temperature °C</p>";
echo "<p><strong>Mitrums:</strong> $humidity %</p>";
echo "<p><strong>Spiediens:</strong> $pressure hPa</p>";
echo "<p><strong>Vējš:</strong> $wind_speed m/s virziens: $wind_direction°</p>";
echo "<p><strong>Laika apstākļi:</strong> $weather</p>";
?>