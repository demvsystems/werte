<?php

namespace Demv\Werte\Tests\Betrag;

use Demv\Werte\Betrag\Einkommen;
use Demv\Werte\Betrag\Euro;
use Dgame\Ensurance\Exception\EnsuranceException;
use PHPUnit\Framework\TestCase;

class EinkommenTest extends TestCase
{
    public function testValidAmount()
    {
        $einkommen = new Einkommen(new Euro(410.2));

        $this->assertTrue($einkommen->getBetrag()->isPositiv());
        $this->assertFalse($einkommen->getBetrag()->isNegativ());
        $this->assertEquals(410.2, $einkommen->getBetrag()->getBetrag());
        $this->assertEquals('410,20 €', $einkommen->getBetrag()->asText());
    }

    public function testInvalidAmount()
    {
        $this->expectException(EnsuranceException::class);
        $this->expectExceptionMessage('Der Betrag des Einkommens muss positiv sein');

        new Einkommen(new Euro(-100));
    }
}
