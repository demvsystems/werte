<?php

namespace Demv\Werte\Tests;

use Demv\Werte\Value;
use PHPUnit\Framework\TestCase;

class ValueTest extends TestCase
{
    public function testGetId(): void
    {
        $value = new Value(1, 'test1');
        $this->assertEquals(1, $value->getId());

        $value = new Value(2, 'test2');
        $this->assertEquals(2, $value->getId());

        $value = new Value(3, 'test3');
        $this->assertEquals(3, $value->getId());
    }

    public function testGetName(): void
    {
        $value = new Value(1, 'test1');
        $this->assertEquals('test1', $value->getName());

        $value = new Value(1, 1);
        $this->assertEquals(1, $value->getName());

        $value = new Value(2, 'dwa123');
        $this->assertEquals('dwa123', $value->getName());
    }

    public function testEquals(): void
    {
        $value1 = new Value(1, 'test');
        $value2 = new Value(1, 'test');
        $this->assertTrue($value1->equals($value2));
    }

    public function testEqualsNot(): void
    {
        $value1 = new Value(1, 'Herr');
        $value2 = new Value(2, 'test1');
        $this->assertFalse($value1->equals($value2));
    }

    public function testIs(): void
    {
        $value1 = new Value(1, 'test');
        $value2 = new Value(2, 'test1');

        $this->assertTrue($value1->is(1));
        $this->assertFalse($value1->is(2));
        $this->assertTrue($value2->is(2));
    }

    public function testIsNot(): void
    {
        $value1 = new Value(1, 'test');
        $value2 = new Value(2, 'test1');

        $this->assertFalse($value1->isNot(1));
        $this->assertTrue($value1->isNot(2));
        $this->assertTrue($value2->isNot(1));
        $this->assertFalse($value2->isNot(2));
    }
}
