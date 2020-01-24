<?php


/*Ekampreet Kaur
* Elijah Maret
* date: Jan/24/2020
* URL: http://ekaur.greenriverdev.com/328/pets2/index.php
 * URL: http://emaret.greenriverdev.com/328/pets2/index.php
* description:
*/


//start a session
//session_start();

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require autload file
require("vendor/autoload.php");


//instantiate F3
$f3 = Base::instance();

//DEFINE A DEFAULT ROUTE
$f3->route('GET /', function () {
    //$view = new Template();
    //echo $view->render('views/home.html');
    echo "<h1>Hello Pets!</h2>";

    echo "<a href='order'>Order a Pet</a>";
});

$f3->route('GET /@item', function($f3, $params) {
    //var_dump($params);
    $item = $params['item'];
    $petSounds = array("dog" => "Woof", "chicken" => "Cluck cluck", "cat" => "Meow", "fish" => "...", "crow" => "Cawcaw!");
    if (array_key_exists($item, $petSounds)) {
        echo $petSounds[$item];
    } else {
        $f3->error(404);
    }
});




//runf3
$f3->run();





