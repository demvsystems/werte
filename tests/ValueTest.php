<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.01.17
 * Time: 11:43
 */
use Demv\Werte\Value;

class ValueTest extends PHPUnit_Framework_TestCase
{
    public function testGetId()
    {
        $value = new Value(1, 'test1');
        $this->assertEquals(1, $value->getId());

        $value = new Value(2, 'test2');
        $this->assertEquals(2, $value->getId());

        $value = new Value(3, 'test3');
        $this->assertEquals(3, $value->getId());
    }

    public function testGetName()
    {
        $value = new Value(1, 'test1');
        $this->assertEquals('test1', $value->getName());

        $value = new Value(1, 1);
        $this->assertEquals(1, $value->getName());

        $value = new Value(2, 'dwa123');
        $this->assertEquals('dwa123', $value->getName());
    }

    public function testEquals()
    {
        $value1 = new Value(1, 'test');
        $value2 = new Value(1, 'test1');
        $this->assertTrue($value1->equals($value2));
    }

    public function testEqualsNot()
    {
        $value1 = new Value(1, 'test');
        $value2 = new Value(2, 'test1');
        $this->assertFalse($value1->equals($value2));
    }
}