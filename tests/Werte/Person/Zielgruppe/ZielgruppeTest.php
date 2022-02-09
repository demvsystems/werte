<?php

namespace Demv\Werte\Tests\Person\Zielgruppe;

use Codeception\Specify;
use Demv\Werte\Person\Zielgruppe\Zielgruppe;
use Demv\Werte\Person\Zielgruppe\ZielgruppeInterface;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Aerzte;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Angestellte;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\AngestellteOeffentlicherDienst;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Auszubildende;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Beamte;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Existenzgruender;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Familie;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\FreieBerufe;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Gesellschafter;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\HaeusleBauer;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Kinder;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Kuenstler;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Landwirte;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Mediziner;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Piloten;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Ruhestaendler;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Schueler;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Selbstaendige;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\SelbstaendigeHandwerker;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\SoldatenPolizistenFeuerwehrleute;
use Demv\Werte\Person\Zielgruppe\Zielgruppen\Studenten;
use PHPUnit\Framework\TestCase;

class ZielgruppeTest extends TestCase
{
    use Specify;

    public function getZielgruppe(): Zielgruppe
    {
        return new Zielgruppe();
    }

    public function testGetAll(): void
    {
        $provider = $this->getZielgruppe();

        $this->specify('Alle Einträge wurden registriert', function () use ($provider): void {
            $this->assertEquals(21, count($provider->getAll()));
        });

        $this->specify('Alle Instanzen implementieren das gleiche Interface.', function () use ($provider): void {
            foreach ($provider->getAll() as $member) {
                $this->assertInstanceOf(ZielgruppeInterface::class, $member);
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
        $provider = $this->getZielgruppe();
        $this->checkGetOne($provider, Angestellte::class);
        $this->checkGetOne($provider, Aerzte::class);
        $this->checkGetOne($provider, AngestellteOeffentlicherDienst::class);
        $this->checkGetOne($provider, Auszubildende::class);
        $this->checkGetOne($provider, Beamte::class);
        $this->checkGetOne($provider, Existenzgruender::class);
        $this->checkGetOne($provider, Familie::class);
        $this->checkGetOne($provider, FreieBerufe::class);
        $this->checkGetOne($provider, Gesellschafter::class);
        $this->checkGetOne($provider, HaeusleBauer::class);
        $this->checkGetOne($provider, Kinder::class);
        $this->checkGetOne($provider, Kuenstler::class);
        $this->checkGetOne($provider, Landwirte::class);
        $this->checkGetOne($provider, Mediziner::class);
        $this->checkGetOne($provider, Piloten::class);
        $this->checkGetOne($provider, Ruhestaendler::class);
        $this->checkGetOne($provider, Schueler::class);
        $this->checkGetOne($provider, Selbstaendige::class);
        $this->checkGetOne($provider, SelbstaendigeHandwerker::class);
        $this->checkGetOne($provider, SoldatenPolizistenFeuerwehrleute::class);
        $this->checkGetOne($provider, Studenten::class);
    }

    /**
     * @param Zielgruppe $provider
     * @param string            $classname
     */
    private function checkGetOne(Zielgruppe $provider, string $classname): void
    {
        $instance = new $classname();
        $this->assertNotEmpty($provider->getOne($instance->getId()));
        $this->assertTrue($provider->exists($instance->getId()));
        $value = $provider->getOne($instance->getId());
        $this->assertSame($instance->getId(), $value->getId());
        $this->assertInstanceOf($classname, $value);
    }
}
