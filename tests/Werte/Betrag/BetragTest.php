<?php

namespace Demv\Werte\Tests\Betrag;

use Demv\Werte\Betrag\Betrag;
use PHPUnit\Framework\TestCase;

class BetragTest extends TestCase
{
    public function testIsPositiv()
    {
        $betrag = new Betrag(4200.35);

        $this->assertTrue($betrag->isPositiv());
        $this->assertFalse($betrag->isNegativ());
        $this->assertTrue($betrag->isKleinerAls(4201));
        $this->assertTrue($betrag->isKleinerOderGleich(4201));
        $this->assertTrue($betrag->isGroesserOderGleich(4200.35));
        $this->assertTrue($betrag->isGroesserAls(4200));
        $this->assertEquals(4200.35, $betrag->getBetrag());
        $this->assertEquals('4.200,35', $betrag->asText());
    }

    public function testIsNegative()
    {
        $betrag = new Betrag(-2300.5);

        $this->assertFalse($betrag->isPositiv());
        $this->assertTrue($betrag->isNegativ());
        $this->assertTrue($betrag->isKleinerAls(-2299));
        $this->assertTrue($betrag->isKleinerOderGleich(-2299));
        $this->assertTrue($betrag->isGroesserOderGleich(-2300.5));
        $this->assertTrue($betrag->isGroesserAls(-2400));
        $this->assertEquals(-2300.5, $betrag->getBetrag());
        $this->assertEquals('-2.300,50', $betrag->asText());
    }
}
