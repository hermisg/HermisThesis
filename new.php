<?php
$api_url= 'https://api.openweathermap.org/data/2.5/onecall?lat=37.4&lon=24.9&exclude=hourly&appid=9acde74770b0f2398e242ba434eb608b';
$wheather_data = json_decode( file_get_contents($api_url), true);

$temperature_1 = $wheather_data['daily']['0']['temp']['morn'];
$temperature_2 = $wheather_data['daily']['0']['temp']['day'];
$temperature_3 = $wheather_data['daily']['0']['temp']['eve'];
$temperature_4 = $wheather_data['daily']['0']['temp']['night'];
$temperature_5 = $wheather_data['daily']['0']['temp']['min'];


$temperature_cel1 = $temperature_1 - 273;
$temperature_cel2 = $temperature_2 - 273;
$temperature_cel3 = $temperature_3 - 273;
$temperature_cel4 = $temperature_4 - 273;
$temperature_cel5 = $temperature_5 - 273;



echo"<pre>";
print_r($temperature_cel1);
print_r($temperature_cel2);
print_r($temperature_cel3);
print_r($temperature_cel4);
print_r($temperature_cel5);
?>