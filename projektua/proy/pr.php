<?php

require '../vendor/autoload.php'; 

use DmitryIvanov\DarkSkyApi\DarkSkyApi;

$forecast = (new DarkSkyApi('e74b990fb81cf9ad34a2c13c4d21604a'))
    ->location(53.4809494, -2.2374301)
    ->units('si')
    ->language('es')
    ->forecast();
echo $forecast->currently()->summary();



// https://packagist.org/packages/dmitry-ivanov/dark-sky-api
// codetime youtube