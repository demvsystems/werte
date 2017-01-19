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
use Demv\Werte\Person\Berufsunfaehigkeitsstatus\Status\ZeitweiseNichtMoeglich;
use PHPUnit\Framework\TestCase;

class ZeitweiseNichtMoeglichTest extends TestCase
{
    /**
     * @return BerufsunfaehigkeitsstatusInterface
     */
    private function getBUStatus(): BerufsunfaehigkeitsstatusInterface
    {
        return new ZeitweiseNichtMoeglich();
    }

    public function testId()
    {
        $this->assertSame(1, $this->getBUStatus()->getId());
    }

    public function testName()
    {
        $this->assertSame('BU zeitweise nicht Möglich', $this->getBUStatus()->getName());
    }

    public function testAktuellMoeglich()
    {
        $this->assertSame(false, $this->getBUStatus()->isBuAktuellMoeglich());
    }
}