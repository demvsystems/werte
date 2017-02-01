<?php
/**
 * Created by PhpStorm.
 * User: Bjarne
 * Date: 01.02.2017
 * Time: 11:52
 */

namespace Demv\Werte\Tests\Betrag;

use Demv\Werte\Betrag\Euro;
use PHPUnit\Framework\TestCase;

class EuroTest extends TestCase
{
    public function testIPositive()
    {
        $euro = new Euro(4.2);

        $this->assertTrue($euro->isPositiv());
        $this->assertFalse($euro->isNegativ());
        $this->assertEquals(4.2, $euro->getBetrag());
        $this->assertEquals('4.20€', $euro->asText());
    }

    public function testIsNegative()
    {
        $euro = new Euro(-2.3);

        $this->assertFalse($euro->isPositiv());
        $this->assertTrue($euro->isNegativ());
        $this->assertEquals(-2.3, $euro->getBetrag());
        $this->assertEquals('-2.30€', $euro->asText());
    }
}