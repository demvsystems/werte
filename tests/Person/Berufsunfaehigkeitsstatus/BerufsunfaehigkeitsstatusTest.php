<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 15:47
 */
namespace Demv\Werte\Tests\Person\Berufsunfaehigkeitsstatus;

use Demv\Werte\Person\Berufsunfaehigkeitsstatus\Berufsunfaehigkeitsstatus;
use Demv\Werte\Person\Berufsunfaehigkeitsstatus\Status\Moeglich;
use Demv\Werte\Person\Berufsunfaehigkeitsstatus\Status\NichtMoeglich;
use Demv\Werte\Person\Berufsunfaehigkeitsstatus\Status\ZeitweiseNichtMoeglich;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit\Framework\TestCase;

class BerufsunfaehigkeitsstatusTest extends TestCase
{

    use ProviderTestTrait;

    /**
     * @return Berufsunfaehigkeitsstatus
     */
    private function getBerufsunfaehigkeitsstatus()
    {
        return new Berufsunfaehigkeitsstatus();
    }

    public function testGetAll()
    {
        $provider = $this->getBerufsunfaehigkeitsstatus();
        $this->assertEquals(3, count($provider->getAll()));
    }

    public function testEntries()
    {
        $provider = $this->getBerufsunfaehigkeitsstatus();
        $this->checkGetOne($provider, Moeglich::class);
        $this->checkGetOne($provider, NichtMoeglich::class);
        $this->checkGetOne($provider, ZeitweiseNichtMoeglich::class);
    }

}