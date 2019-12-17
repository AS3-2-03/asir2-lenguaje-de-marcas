<?php


$image = new Imagick();


// include composer autoload
// require __DIR__ . '/vendor/autoload.php';

require 'vendor/autoload.php';

// import the Intervention Image Manager Class
    use Intervention\Image\ImageManager;

    //use ImageManager;


// create an image manager instance with favored driver
    $manager = new ImageManager(array('driver' => 'imagick'));

// to finally create image instances
    $image = $manager->make('images/paisaje1.jpg')->resize(300, 200);


    //new \Intervention\Image\ImageManager(array('driver' => 'gd'));

//use Intervention\Image\ImageManagerStatic;
//use Imagick;
    
    $Image::configure(['driver' => 'imagick']);


//echo "kaixo";

?>