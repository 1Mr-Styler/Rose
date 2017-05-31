<?php
/**
 * Created by PhpStorm.
 * User: Styl3R
 * Date: 5/24/17
 * Time: 9:33 PM
 */

namespace Girls;


class Lizzy
{

    public $name;
    /**
     * Lizzy constructor.
     */
    public function __construct($n)
    {
        $this->name = $n;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}