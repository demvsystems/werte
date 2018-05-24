<?php

namespace Demv\Werte\Tests\Person\Taetigkeitsstatus;

use Codeception\Specify;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Angestellter;
use Demv\Werte\Person\Taetigkeitsstatus\Status\AngestellterOeffentlDienst;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Arbeitssuchend;
use Demv\Werte\Person\Taetigkeitsstatus\Status\BeamterAufLebenszeit;
use Demv\Werte\Person\Taetigkeitsstatus\Status\BeamterAufProbe;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Berufsausbildung;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Elternzeit;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Erwerbsunfaehig;
use Demv\Werte\Person\Taetigkeitsstatus\Status\GGFVersicherungsFrei;
use Demv\Werte\Person\Taetigkeitsstatus\Status\GGFVersicherungsPflichtig;
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
use PHPUnit\Framework\TestCase;

class TaetigkeitsstatusTest extends TestCase
{
    use Specify;

    /**
     * @return Taetigkeitsstatus
     */
    private function getTaetigkeitsstatus()
    {
        return new Taetigkeitsstatus();
    }

    public function testGetAll(): void
    {
        $provider = $this->getTaetigkeitsstatus();

        $this->specify('Alle Einträge wurden registriert', function () use ($provider): void {
            $this->assertEquals(18, count($provider->getAll()));
        });

        $this->specify('Alle Instanzen implementieren das gleiche Interface.', function () use ($provider): void {
            foreach ($provider->getAll() as $member) {
                $this->assertInstanceOf(TaetigkeitsstatusInterface::class, $member);
            }
        });

        $this->specify('Keine doppelten Ids', function () use ($provider): void {
            $ids = [];
            foreach ($provider->getAll() as $member) {
                $ids[] = $member->getId();
            }
            $this->assertEquals(count($ids), count(array_unique($ids)));
        });
    }

    public function testEntries(): void
    {
        $provider = $this->getTaetigkeitsstatus();
        $this->checkGetOne($provider, Angestellter::class, true, true);
        $this->checkGetOne($provider, AngestellterOeffentlDienst::class, true, true);
        $this->checkGetOne($provider, Arbeitssuchend::class, false, false);
        $this->checkGetOne($provider, BeamterAufLebenszeit::class, true, false);
        $this->checkGetOne($provider, BeamterAufProbe::class, true, false);
        $this->checkGetOne($provider, Berufsausbildung::class, false, true);
        $this->checkGetOne($provider, Elternzeit::class, false, false);
        $this->checkGetOne($provider, Erwerbsunfaehig::class, false, false);
        $this->checkGetOne($provider, Hausfrau::class, false, false);
        $this->checkGetOne($provider, Minijob::class, true, false);
        $this->checkGetOne($provider, Rentner::class, false, false);
        $this->checkGetOne($provider, Schulausbildung::class, false, false);
        $this->checkGetOne($provider, Selbststaendiger::class, false, false);
        $this->checkGetOne($provider, Sonstige::class, false, false);
        $this->checkGetOne($provider, Studium::class, false, false);
        $this->checkGetOne($provider, Vorstand::class, true, false);
        $this->checkGetOne($provider, GGFVersicherungsFrei::class, true, false);
        $this->checkGetOne($provider, GGFVersicherungsPflichtig::class, false, false);
    }

    /**
     * @param Taetigkeitsstatus $provider
     * @param string            $classname
     * @param bool              $entgeltfortzahlung
     * @param bool              $grvanspruch
     */
    private function checkGetOne(Taetigkeitsstatus $provider, string $classname, bool $entgeltfortzahlung, bool $grvanspruch): void
    {
        $instance = new $classname();
        $this->assertNotEmpty($provider->getOne($instance->getId()));
        $this->assertTrue($provider->exists($instance->getId()));
        $value = $provider->getOne($instance->getId());
        $this->assertSame($instance->getId(), $value->getId());
        $this->assertInstanceOf($classname, $value);
        $this->assertEquals($entgeltfortzahlung, $value->hasEntgeltfortzahlung());
        $this->assertEquals($grvanspruch, $value->hasAnspruchGrv());
    }
}
