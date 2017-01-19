<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 11:30
 */
namespace Demv\Werte\Tests\Person\Taetigkeitsstatus;

use Demv\Werte\Person\Taetigkeitsstatus\Status\Angestellter;
use Demv\Werte\Person\Taetigkeitsstatus\Status\AngestellterOeffentlDienst;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Arbeitssuchend;
use Demv\Werte\Person\Taetigkeitsstatus\Status\BeamterAufLebenszeit;
use Demv\Werte\Person\Taetigkeitsstatus\Status\BeamterAufProbe;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Berufsausbildung;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Elternzeit;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Erwerbsunfaehig;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Hausfrau;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Minijob;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Rentner;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Schulausbildung;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Selbststaendiger;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Sonstige;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Studium;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Vorstand;
use Demv\Werte\Person\Taetigkeitsstatus\Taetigkeitsstatus;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit\Framework\TestCase;

class TaetigkeitsstatusTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @return Taetigkeitsstatus
     */
    private function getTaetigkeitsstatus()
    {
        return new Taetigkeitsstatus();
    }

    public function testGetAll()
    {
        $provider = $this->getTaetigkeitsstatus();
        $this->assertEquals(16, count($provider->getAll()));
        foreach ($provider->getAll() as $member) {
            $this->assertInstanceOf(TaetigkeitsstatusInterface::class, $member);
        }
    }

    public function testEntries()
    {
        $provider = $this->getTaetigkeitsstatus();
        $this->checkGetOne($provider, Angestellter::ID);
        $this->checkGetOne($provider, AngestellterOeffentlDienst::ID);
        $this->checkGetOne($provider, Arbeitssuchend::ID);
        $this->checkGetOne($provider, BeamterAufLebenszeit::ID);
        $this->checkGetOne($provider, BeamterAufProbe::ID);
        $this->checkGetOne($provider, Berufsausbildung::ID);
        $this->checkGetOne($provider, Elternzeit::ID);
        $this->checkGetOne($provider, Erwerbsunfaehig::ID);
        $this->checkGetOne($provider, Hausfrau::ID);
        $this->checkGetOne($provider, Minijob::ID);
        $this->checkGetOne($provider, Rentner::ID);
        $this->checkGetOne($provider, Schulausbildung::ID);
        $this->checkGetOne($provider, Selbststaendiger::ID);
        $this->checkGetOne($provider, Sonstige::ID);
        $this->checkGetOne($provider, Studium::ID);
        $this->checkGetOne($provider, Vorstand::ID);
    }
}