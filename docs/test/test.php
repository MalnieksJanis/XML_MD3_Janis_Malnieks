<?php
// Testē, vai saņem datus no OpenWeather API
$url = "http://api.openweathermap.org/data/2.5/weather?q=Riga&mode=xml&appid=2a42aac82c9d83e1160294167905130a";
$response = file_get_contents($url);
echo $response;
?>