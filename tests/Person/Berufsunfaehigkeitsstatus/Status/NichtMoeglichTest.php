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
use Demv\Werte\Person\Berufsunfaehigkeitsstatus\Status\NichtMoeglich;
use PHPUnit\Framework\TestCase;

class NichtMoeglichTest extends TestCase
{
    /**
     * @return BerufsunfaehigkeitsstatusInterface
     */
    private function getBUStatus(): BerufsunfaehigkeitsstatusInterface
    {
        return new NichtMoeglich();
    }

    public function testId()
    {
        $this->assertSame(2, $this->getBUStatus()->getId());
    }

    public function testName()
    {
        $this->assertSame('BU nicht Möglich', $this->getBUStatus()->getName());
    }

    public function testAktuellMoeglich()
    {
        $this->assertSame(false, $this->getBUStatus()->isBuAktuellMoeglich());
    }
}