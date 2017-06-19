<?php
/**
 * Created by PhpStorm.
 * User: Styl3R
 * Date: 5/24/17
 * Time: 2:06 AM
 */

include __DIR__ . "/vendor/autoload.php";

try {
    $lizzy = new \Girls\Lizzy("jinfo.json");
    $data = json_decode($lizzy, true);

    print "App Name: " . $data['App'] . \Libs\HipHop::prettify("\n");
    print " Version: " . $data['version'] . \Libs\HipHop::prettify("\n");
    print " History: " . \Libs\HipHop::prettify("\n");
    foreach ($data['verhist'] as $k => $v) {
        print "\tVersion " . str_replace('_', '.', $k) . ": " . \Libs\HipHop::prettify("\n");
        print "\t\tDate: " . $v[0] . \Libs\HipHop::prettify("\n");
        for ($i = 1; $i < count($v); $i++) {
            print  "\t\t" . $v[$i] . \Libs\HipHop::prettify("\n");
        }
    }
    print "Used in: " . \Libs\HipHop::prettify("\n");
    foreach ($data['used_in'] as $k => $v) {
        print "\t" . $k . " : " . $v . \Libs\HipHop::prettify("\n");
    }

} catch (Exception $e) {
    echo $e->getMessage();
}