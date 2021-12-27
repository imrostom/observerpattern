<?php

use App\Library\Newspaper;
use App\Library\Reader;

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require __DIR__ . '/vendor/autoload.php';


// Observer pattern
// Observer pattern Have 2 actor - Subject, Observer


$newspaper = new Newspaper();

$rostom = new Reader('Rostom Ali');
$sourav = new Reader('Sourav');
$alamin = new Reader('Alamin');

$newspaper->attach($rostom);
$newspaper->attach($sourav);
$newspaper->attach($alamin);

$newspaper->send('Post 1');
echo "<br/>";
echo "<br/>";

$newspaper->send('Post 2');
echo "<br/>";
echo "<br/>";

$newspaper->detach($alamin);
$newspaper->send('Post 3');
