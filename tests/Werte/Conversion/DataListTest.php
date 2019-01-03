<?php

namespace Demv\Werte\Tests\Conversion;

use Demv\Werte\Conversion\DataList;
use Demv\Werte\Value;
use PHPUnit\Framework\TestCase;

class DataListTest extends TestCase
{
    public function testForEmptyArray()
    {
        $this->assertEmpty(DataList::fromArray([]));
    }

    public function testForEmptyProvider()
    {
        $this->assertEmpty(DataList::fromProvider(new TestProvider([])));
    }

    public function testForArray()
    {
        $values = [
            new Value(1, 'test1'),
            new Value(2, 'test2'),
            new Value(3, 'test3'),
        ];
        $this->assertEquals([1 => 'test1', 2 => 'test2', 3 => 'test3'], DataList::fromArray($values));
    }

    public function testForProvider()
    {
        $values = [
            new Value(1, 'test1'),
            new Value(2, 'test2'),
            new Value(3, 'test3'),
        ];
        $this->assertEquals([1 => 'test1', 2 => 'test2', 3 => 'test3'], DataList::fromProvider(new TestProvider($values)));
    }
}
