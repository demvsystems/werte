<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 15:50
 */

namespace Demv\Werte\Tests\Person\BuMoeglichkeit\Moeglichkeiten;

use Demv\Werte\Person\BuMoeglichkeit\BuMoeglichkeitInterface;
use Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten\Moeglich;
use PHPUnit\Framework\TestCase;

class MoeglichTest extends TestCase
{
    /**
     * @return BuMoeglichkeitInterface
     */
    private function getBuMoeglichkeit(): BuMoeglichkeitInterface
    {
        return new Moeglich();
    }

    public function testId()
    {
        $this->assertSame(0, $this->getBuMoeglichkeit()->getId());
    }

    public function testName()
    {
        $this->assertSame('BU möglich', $this->getBuMoeglichkeit()->getName());
    }

    public function testAktuellMoeglich()
    {
        $this->assertSame(true, $this->getBuMoeglichkeit()->isBuAktuellMoeglich());
    }
}