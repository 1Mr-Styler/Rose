<?php
/**
 * Created by PhpStorm.
 * User: Styl3R
 * Date: 5/24/17
 * Time: 9:06 PM
 */

namespace Girls;


use Libs\HipHopInterface;

class Suzy implements HipHopInterface
{
    public $options;

    /**
     * Suzy constructor.
     * @param callable $c
     * @param array $options
     */
    public function __construct(callable $c, array $options)
    {
        $this->options = $options;
    }

    public static function juice(): int
    {
        return "Me lIkey!";
    }

    public function __toString()
    {
        return "SuzyLoader: " . $this->options['name'];
    }

    function getOptions()
    {
        return $this->options;
    }

    function rosey() : Rose
    {
        return new Rose([$this->options['name'], $this->options['email'],]);
    }

}