<?php

namespace Demv\Werte\Tests\Person\Beziehung;

use Demv\Werte\Person\Beziehung\Familiaer\FamiliaereBeziehung;
use PHPUnit\Framework\TestCase;

class FamiliaereBeziehungTest extends TestCase
{
    public function testIsFamiliaer()
    {
        $beziehung = new FamiliaereBeziehung(1, 'test');
        $this->assertTrue($beziehung->isFamiliaer());
    }

    public function testIsBeruflich()
    {
        $beziehung = new FamiliaereBeziehung(1, 'test');
        $this->assertFalse($beziehung->isBeruflich());
    }

    public function testZusammenlebend()
    {
        $beziehung = new FamiliaereBeziehung(1, 'test');
        $this->assertFalse($beziehung->getLebenZusammen());

        $beziehung->setLebenZusammen(false);
        $this->assertFalse($beziehung->getLebenZusammen());

        $beziehung->setLebenZusammen(true);
        $this->assertTrue($beziehung->getLebenZusammen());
    }
}