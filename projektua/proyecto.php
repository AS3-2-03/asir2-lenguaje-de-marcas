<?php

require 'vendor/autoload.php';

use DmitryIvanov\DarkSkyApi\DarkSkyApi;
$forecast = (new DarkSkyApi('e74b990fb81cf9ad34a2c13c4d21604a'))
    ->location(46.482, 30.723)
    ->units('si')
    ->language('en')
    ->forecast();
echo $forecast->currently()->summary();