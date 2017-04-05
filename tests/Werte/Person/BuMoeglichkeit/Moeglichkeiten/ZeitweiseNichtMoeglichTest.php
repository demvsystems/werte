<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 15:50
 */

namespace Demv\Werte\Tests\Person\BuMoeglichkeit\Moeglichkeiten;

use Demv\Werte\Person\BuMoeglichkeit\BuMoeglichkeitInterface;
use Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten\ZeitweiseNichtMoeglich;
use PHPUnit\Framework\TestCase;

class ZeitweiseNichtMoeglichTest extends TestCase
{
    /**
     * @return BuMoeglichkeitInterface
     */
    private function getBuMoeglichkeit(): BuMoeglichkeitInterface
    {
        return new ZeitweiseNichtMoeglich();
    }

    public function testId()
    {
        $this->assertSame(1, $this->getBuMoeglichkeit()->getId());
    }

    public function testName()
    {
        $this->assertSame('BU zeitweise nicht Möglich', $this->getBuMoeglichkeit()->getName());
    }

    public function testAktuellMoeglich()
    {
        $this->assertSame(false, $this->getBuMoeglichkeit()->isBuAktuellMoeglich());
    }
}