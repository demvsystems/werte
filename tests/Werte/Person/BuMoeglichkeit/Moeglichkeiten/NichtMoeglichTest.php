<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 15:50
 */

namespace Demv\Werte\Tests\Person\BuMoeglichkeit\Moeglichkeiten;

use Demv\Werte\Person\BuMoeglichkeit\BuMoeglichkeitInterface;
use Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten\NichtMoeglich;
use PHPUnit\Framework\TestCase;

class NichtMoeglichTest extends TestCase
{
    /**
     * @return BuMoeglichkeitInterface
     */
    private function getBuMoeglichkeit(): BuMoeglichkeitInterface
    {
        return new NichtMoeglich();
    }

    public function testId(): void
    {
        $this->assertSame(2, $this->getBuMoeglichkeit()->getId());
    }

    public function testName(): void
    {
        $this->assertSame('BU nicht möglich', $this->getBuMoeglichkeit()->getName());
    }

    public function testAktuellMoeglich(): void
    {
        $this->assertSame(false, $this->getBuMoeglichkeit()->isBuAktuellMoeglich());
    }
}
