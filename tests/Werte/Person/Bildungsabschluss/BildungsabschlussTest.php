<?php

namespace Demv\Werte\Tests\Person\Bildungsabschluss;

use Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich\AbschlussAlsMeister;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich\AusbildungHandwerk;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich\AusbildungKaufmaennisch;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich\AusbildungMitWeiterbildung;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich\AusbildungSonstige;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich\Auszubildender;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Beruflich\BetriebswirtFachwirt;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\BachelorFachhochschule;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\BachelorUniversitaet;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\DiplomFachhochschule;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\DiplomMagister;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\ImStudium;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\MasterFachhochschule;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\MasterUniversitaet;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\Promotion;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Hochschule\Staatsexamen;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Schule\Abitur;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Schule\Fachabitur;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Schule\Hauptschulabschluss;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Schule\KeinAbschluss;
use Demv\Werte\Person\Bildungsabschluss\Bildung\Schule\MittlereReife;
use Demv\Werte\Person\Bildungsabschluss\Bildungsabschluss;
use Demv\Werte\Person\Bildungsabschluss\BildungsabschlussInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class BildungsabschlussTest
 * @package Demv\Werte\Tests\Person\Bildungsabschluss
 */
class BildungsabschlussTest extends TestCase
{
    /**
     * @var Bildungsabschluss
     */
    private $provider;

    protected function setUp(): void
    {
        $this->provider = new Bildungsabschluss();
    }

    public function testGetBildungSchule()
    {
        $abschluesse = $this->provider->getBildungSchule();

        $this->assertTrue(in_array(new KeinAbschluss(), $abschluesse));
        $this->assertTrue(in_array(new Hauptschulabschluss(), $abschluesse));
        $this->assertTrue(in_array(new MittlereReife(), $abschluesse));
        $this->assertTrue(in_array(new Fachabitur(), $abschluesse));
        $this->assertTrue(in_array(new Abitur(), $abschluesse));
    }

    public function testGetBildungBeruflich()
    {
        $abschluesse = $this->provider->getBildungBeruflich();

        $this->assertTrue(in_array(new AusbildungKaufmaennisch(), $abschluesse), AusbildungKaufmaennisch::class);
        $this->assertTrue(in_array(new AusbildungHandwerk(), $abschluesse), AusbildungHandwerk::class);
        $this->assertTrue(in_array(new AusbildungSonstige(), $abschluesse), AusbildungSonstige::class);
        $this->assertTrue(in_array(new AusbildungMitWeiterbildung(), $abschluesse), AusbildungMitWeiterbildung::class);
        $this->assertTrue(in_array(new Auszubildender(), $abschluesse), Auszubildender::class);
        $this->assertTrue(in_array(new AbschlussAlsMeister(), $abschluesse), AbschlussAlsMeister::class);
        $this->assertTrue(in_array(new BetriebswirtFachwirt(), $abschluesse), BetriebswirtFachwirt::class);
    }

    public function testGetBildungHochschule()
    {
        $abschluesse = $this->provider->getBildungHochschule();

        $this->assertTrue(in_array(new ImStudium(), $abschluesse));
        $this->assertTrue(in_array(new BachelorFachhochschule(), $abschluesse));
        $this->assertTrue(in_array(new BachelorUniversitaet(), $abschluesse));
        $this->assertTrue(in_array(new MasterFachhochschule(), $abschluesse));
        $this->assertTrue(in_array(new MasterUniversitaet(), $abschluesse));
        $this->assertTrue(in_array(new DiplomFachhochschule(), $abschluesse));
        $this->assertTrue(in_array(new DiplomMagister(), $abschluesse));
        $this->assertTrue(in_array(new Staatsexamen(), $abschluesse));
        $this->assertTrue(in_array(new Promotion(), $abschluesse));
    }

    public function testGetAllRegistriert()
    {
        $this->assertEquals(21, count($this->provider->getAll()));
    }

    public function testInterface()
    {
        foreach ($this->provider->getAll() as $member) {
            $this->assertInstanceOf(BildungsabschlussInterface::class, $member);
        }
    }

    public function testDuplicateEntries()
    {
        $ids = array_map(
            function (BildungsabschlussInterface $status) {
                return $status->getId();
            },
            $this->provider->getAll()
        );

        $this->assertEquals(count($ids), count(array_unique($ids)));
    }
}
