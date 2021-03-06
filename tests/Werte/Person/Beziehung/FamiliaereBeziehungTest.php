<?php

namespace Demv\Werte\Tests\Person\Beziehung;

use Demv\Werte\Person\Beziehung\Familiaer\FamiliaereBeziehung;
use PHPUnit\Framework\TestCase;

class FamiliaereBeziehungTest extends TestCase
{
    public function testIsFamiliaer(): void
    {
        $beziehung = new FamiliaereBeziehung(1, 'test');
        $this->assertTrue($beziehung->isFamiliaer());
    }

    public function testIsBeruflich(): void
    {
        $beziehung = new FamiliaereBeziehung(1, 'test');
        $this->assertFalse($beziehung->isBeruflich());
    }
}
