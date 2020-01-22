<?php

// include composer autoload
//require __DIR__ . '/vendor/autoload.php';
require 'vendor/autoload.php';

use DmitryIvanov\DarkSkyApi\DarkSkyApi;
$forecast = (new DarkSkyApi('e74b990fb81cf9ad34a2c13c4d21604a'))
    ->location(43.1800579, -2.4892857)
    ->units('si')
    ->language('es')
    ->forecast(['currently', 'daily']);
    
echo $forecast->currently()->summary();