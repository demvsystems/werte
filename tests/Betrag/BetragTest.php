<?php

namespace Demv\Werte\Tests\Betrag;

use Demv\Werte\Betrag\Betrag;
use PHPUnit\Framework\TestCase;

class BetragTest extends TestCase
{
    public function testIsPositiv()
    {
        $betrag = new Betrag(4.2);

        $this->assertTrue($betrag->isPositiv());
        $this->assertFalse($betrag->isNegativ());
        $this->assertEquals(4.2, $betrag->getBetrag());
        $this->assertEquals('4.20', $betrag->asText());
    }

    public function testINegative()
    {
        $betrag = new Betrag(-2.3);

        $this->assertFalse($betrag->isPositiv());
        $this->assertTrue($betrag->isNegativ());
        $this->assertEquals(-2.3, $betrag->getBetrag());
        $this->assertEquals('-2.30', $betrag->asText());
    }
}