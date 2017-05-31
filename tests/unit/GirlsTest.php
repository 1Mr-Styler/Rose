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

    /**
     * @test
     * @Version: 1.0
     * @Date: 24/05/17
     */
    public function girls_have_names()
    {

        $lizzy = new Lizzy("Lizzy");
        $rose = new Rose(["Rose", ""]);
        $suzy = new Suzy(["Suzy", ""]);
        $girls = new Collection($rose, $suzy);

        $this->assertEquals("Suzy", $suzy->getName());
        $this->assertEquals("Rose", $rose->getName());
        $this->assertEquals("Lizzy", $lizzy->getName());

        $this->assertCount(2, $girls);
    }

    public function testStuff()
    {
        $girls = new Collection(new Rose(["Rose", "rose@gmail.com"]),
            new Suzy(["Suzy", "suzy@gmail.com"]));


        $this->assertEquals("rose@gmail.com", $girls->get()[0]->getEmail());
        $this->assertEquals("suzy@gmail.com", $girls->get()[1]->getEmail());
    }

    public function test_collec_can_iter()
    {
        $girls = new Collection(new Rose(["Rose", "rose@gmail.com"]),
            new Suzy(["Suzy", "suzy@gmail.com"]));

        foreach ($girls as $girl) {
            $this->assertArrayHasKey("full_name", $girl->fullD());
        }

        self::assertInstanceOf(\ArrayIterator::class, $girls->getIterator());
    }

    public function testJSONExport()
    {
        $girls = new Collection(new Rose(["Rose", "rose@gmail.com"]),
            new Suzy(["Suzy", "suzy@gmail.com"]));

        print $girls;
        $this->assertJson(json_encode($girls));
    }

    public function test_exception()
    {
        $this->setExpectedException(\Libs\JCEPTION::class,'', 33);
        $girls = new Collection(new Rose(["Rose", "rose@gmail.com"]),
            new Suzy(["Suzy", "suzy@gmail.com"]), array());
    }

}
