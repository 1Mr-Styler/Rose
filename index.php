<?php
/**
 * Created by PhpStorm.
 * User: Styl3R
 * Date: 5/24/17
 * Time: 2:06 AM
 */

include __DIR__ . "/vendor/autoload.php";

//$name = new Girls\Rose("James");
$name = new Girls\Suzy("LeBron");
$iz = new Girls\Lizzy("HipHop");

$a = function ($a) {
    return $a*2;
};

foreach ($name->adda([$name, 'callee']) as $m) {
    print $m;
}

$name->juice();