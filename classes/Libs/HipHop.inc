<?php
/**
 * Created by PhpStorm.
 * User: Styl3R
 * Date: 5/31/17
 * Time: 10:05 AM
 */

namespace Libs;


use Traversable;

class HipHop implements \IteratorAggregate
{ // @Version: 1.2

    /**
     * @var HipHopInterface[]
     */
    public $items;

    public function __construct(HipHopInterface ...$classes)
    {
        foreach ($classes as $class) {
            $this->items[$class->getOptions()['name']] = $class;
        }
    }

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->items);
    }

    public function __toString()
    {
        $it = "";
        foreach ($this->items as $item) {
            $it .= $item->getOptions()['name'] . ", ";
        }
        return "Hello from {$it}!";
    }

    public function call($i)
    {
        echo $this->items[$i];
    }

    /**
     * @deprecated
     * @param string $string
     * @return mixed
     */
    public static function prettify(string $string)
    {
        if (PHP_SAPI == 'cli') {
            return str_replace("<br>", "\n", $string);
        } else {
            return str_replace("\n", "<br>", $string);
        }
    }
}

Interface HipHopInterface
{
    public function __toString();

    function getOptions();
}