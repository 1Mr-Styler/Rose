<?php
/**
 * Created by PhpStorm.
 * User: Styl3R
 * Date: 5/24/17
 * Time: 11:24 PM
 */

namespace Libs;


use Girls\Rose;
use Traversable;

class Collection implements \IteratorAggregate
    , \JsonSerializable
{

    /**
     * @var Rose[]
     */
    private $items;

    const LICENSE = "AHGD55";

    /**
     * Collection constructor.
     * @param array|Rose[] ...$items
     *
     */
    public function __construct(Rose ...$items)
    {

        foreach ($items as $item) {
            if ($item->getID() == Collection::LICENSE) {
                $this->items[] = $item;
            } else {
                $item = new Rose(["Fake", "fake@id.com"]);
            }
        }
    }

    public function count()
    {
        return count($this->items);
    }

    public function get()
    {
        return $this->items;
    }

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Rose[]
     * Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->items);
    }

    function __toString()
    {
        return "I have " . $this->count() . " Items";
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        //Access ful data
        $data = [];
        foreach ($this->items as $item) {
            $data[] = $item->fullD();
        }

        return $data;
    }

}
