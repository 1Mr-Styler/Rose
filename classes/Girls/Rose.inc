<?php
/**
 * Created by PhpStorm.
 * User: Styl3R
 * Date: 5/24/17
 * Time: 2:01 AM
 */

namespace Girls;


use Libs\Collection;

final class Rose
{
    private $name, $mail, $id;

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

    public function fullD(): array
    {
        return [
            "full_name" => $this->getName(),
            "email" => $this->getEmail()
        ];
    }

    use license;
}

trait license
{

    function setID($id)
    {
        $this->id = $id;
    }

    function getID()
    {
        return $this->id;
    }
}