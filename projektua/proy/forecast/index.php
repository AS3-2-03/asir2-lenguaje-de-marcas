
<?php

    $api_url = 'https://api.darksky.net/forecast/
    e74b990fb81cf9ad34a2c13c4d21604a/37.8267,-122.4233/us12/en';

    $forecast = json_decode(file_get_contents($api_url));

    echo '<pre>';
    print_r($forecast);
    echo '</pre>';


//'e74b990fb81cf9ad34a2c13c4d21604a'


?>



<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <tittle>Forecast</tittle>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com
        /bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="
        sha384-PsHBR72JQ3S0dhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
    </head>
    <body>
        <main class="container text-center">
            <h1 class="display-1">Forecast</h1>
            <div class="card p-4" style="margin: 0 auto; max-width: 320px;">
                <h2>Current Forecast</h2>
                <h3 class="display-2">75&deg;</h3>
            </div>
        </main>
    </body>
</html>





<?php


require 'vendor/autoload.php';

use DmitryIvanov\DarkSkyApi\DarkSkyApi;
$forecast = (new DarkSkyApi('e74b990fb81cf9ad34a2c13c4d21604a'))
    ->location(46.482, 30.723)
    ->units('si')
    ->language('en')
    ->forecast();
echo $forecast->currently()->summary();


?>























