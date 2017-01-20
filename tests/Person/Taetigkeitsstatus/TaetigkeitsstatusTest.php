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
use Demv\Werte\Person\Taetigkeitsstatus\Status\GeschaeftsfuehrenderGesellschafter;
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
        $this->assertEquals(17, count($provider->getAll()));
        foreach ($provider->getAll() as $member) {
            $this->assertInstanceOf(TaetigkeitsstatusInterface::class, $member);
        }
    }

    public function testEntries()
    {
        $provider = $this->getTaetigkeitsstatus();
        $this->checkGetOne($provider, Angestellter::class);
        $this->checkGetOne($provider, AngestellterOeffentlDienst::class);
        $this->checkGetOne($provider, Arbeitssuchend::class);
        $this->checkGetOne($provider, BeamterAufLebenszeit::class);
        $this->checkGetOne($provider, BeamterAufProbe::class);
        $this->checkGetOne($provider, Berufsausbildung::class);
        $this->checkGetOne($provider, Elternzeit::class);
        $this->checkGetOne($provider, Erwerbsunfaehig::class);
        $this->checkGetOne($provider, Hausfrau::class);
        $this->checkGetOne($provider, Minijob::class);
        $this->checkGetOne($provider, Rentner::class);
        $this->checkGetOne($provider, Schulausbildung::class);
        $this->checkGetOne($provider, Selbststaendiger::class);
        $this->checkGetOne($provider, Sonstige::class);
        $this->checkGetOne($provider, Studium::class);
        $this->checkGetOne($provider, Vorstand::class);
        $this->checkGetOne($provider, GeschaeftsfuehrenderGesellschafter::class);
    }
}