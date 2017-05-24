<?php
/**
 * Created by PhpStorm.
 * User: Styl3R
 * Date: 5/24/17
 * Time: 2:01 AM
 */

namespace Girls;


class Rose
{
    private $name;

    /**
     * Rose constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function myGuy(Rose $class)
    {
        return sprintf("Ehanced %s", $class->getName());
    }

    public function adda(callable $ca)
    {
        $j = array();
//        foreach ($mg as $ls) {
//            $j[] = sprintf("\n%d from %s", $ls, $this->getName());
//        }
        $ca();
        return $j;
    }

    public function callee()
    {
        print "done";
    }

}