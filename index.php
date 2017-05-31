<?php
/**
 * Created by PhpStorm.
 * User: Styl3R
 * Date: 5/24/17
 * Time: 2:06 AM
 */

include __DIR__ . "/vendor/autoload.php";

$ro = new Girls\Rose(["James", ""]);
$name = new Girls\Suzy(["LeBron", ""]);
$iz = new Girls\Lizzy("HipHop");

$coll = new Libs\Collection($name, $ro);


echo $name->juice();