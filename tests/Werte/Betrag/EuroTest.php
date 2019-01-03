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
        $euro = new Euro(4200.35);

        $this->assertTrue($euro->isPositiv());
        $this->assertFalse($euro->isNegativ());
        $this->assertTrue($euro->isKleinerAls(4201));
        $this->assertTrue($euro->isGroesserAls(4200));
        $this->assertEquals(4200.35, $euro->getBetrag());
        $this->assertEquals('4.200,35 €', $euro->asText());
    }

    public function testIsNegative()
    {
        $euro = new Euro(-2300.5);

        $this->assertFalse($euro->isPositiv());
        $this->assertTrue($euro->isNegativ());
        $this->assertTrue($euro->isKleinerAls(-2299));
        $this->assertTrue($euro->isGroesserAls(-2400));
        $this->assertEquals(-2300.5, $euro->getBetrag());
        $this->assertEquals('-2.300,50 €', $euro->asText());
    }
}
