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
    private $name, $mail;

    /**
     * Rose constructor.
     * @param array $details
     */
    public function __construct(array $details)
    {
        $this->name = $details[0];
        $this->mail = $details[1];
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
        $ca();
        return $j;
    }

    public function callee()
    {
        print "done";
    }

    public function getEmail()
    {
        return $this->mail;
    }

    public function fullD()
    {
        return [
            "full_name" => $this->getName(),
            "email"     => $this->getEmail()
        ];
    }

}