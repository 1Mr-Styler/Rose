<?php
/**
 * Created by PhpStorm.
 * User: Styl3R
 * Date: 5/24/17
 * Time: 10:08 PM
 */


namespace Girls;

include __DIR__ . "/../../vendor/autoload.php";

use \Libs\Collection;

class Test extends \PHPUnit_Framework_TestCase
{

    function test_futureSplit()
    {

        $l = new Lizzy(__DIR__ . "/../../jinfo.json");

        $data = json_decode($l, true);

        $s = $l->fixFuture($data['future']);
        var_export($s);

        self::assertEquals("Ability to modify jinfo.json from Rose GUI", $s[1][0]);
    }

}
