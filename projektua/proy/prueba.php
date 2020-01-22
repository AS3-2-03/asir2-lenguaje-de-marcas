<?php

require 'ayeo/temperature';


use Temperature\Factory\DefaultFactory as TemperatureFactory;

$factory = (new TemperatureFactory('e74b990fb81cf9ad34a2c13c4d21604a'));
$temperature = $factory->build(63, 'F');

$temperature; //63 °F
$temperature->convert('C'); //17.2222222222 °C
$temperature->convert('C')->setPrecision(2); //17.22 °C


 // https:github.com/cmfcmf/OpenWeatherMap-PHP-Api/blob/master/Examples/CurrentWeather.php
// codetime youtube




