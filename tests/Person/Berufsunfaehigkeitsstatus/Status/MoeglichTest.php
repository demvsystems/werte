<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 15:50
 */
namespace Demv\Werte\Tests\Person\Berufsunfaehigkeitsstatus\Status;

use Demv\Werte\Person\Berufsunfaehigkeitsstatus\BerufsunfaehigkeitsstatusInterface;
use Demv\Werte\Person\Berufsunfaehigkeitsstatus\Status\Moeglich;
use PHPUnit\Framework\TestCase;

class MoeglichTest extends TestCase
{
    /**
     * @return BerufsunfaehigkeitsstatusInterface
     */
    private function getBUStatus(): BerufsunfaehigkeitsstatusInterface
    {
        return new Moeglich();
    }

    public function testId()
    {
        $this->assertSame(0, $this->getBUStatus()->getId());
    }

    public function testName()
    {
        $this->assertSame('BU Möglich', $this->getBUStatus()->getName());
    }

    public function testAktuellMoeglich()
    {
        $this->assertSame(true, $this->getBUStatus()->isBuAktuellMoeglich());
    }
}