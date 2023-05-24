<?php

namespace Demv\Werte\Tests\Person\Beziehung;

use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Person\Beziehung\Beruflich\Angehoeriger;
use Demv\Werte\Person\Beziehung\Beruflich\Arbeitgeber;
use Demv\Werte\Person\Beziehung\Beruflich\Arbeitnehmer;
use Demv\Werte\Person\Beziehung\Beruflich\Arzt;
use Demv\Werte\Person\Beziehung\Beruflich\Aufsichtsrat;
use Demv\Werte\Person\Beziehung\Beruflich\BautraegerKaeufer;
use Demv\Werte\Person\Beziehung\Beruflich\FirmaAufsichtsrat;
use Demv\Werte\Person\Beziehung\Beruflich\FirmaVon;
use Demv\Werte\Person\Beziehung\Beruflich\FirmaVonInhaber;
use Demv\Werte\Person\Beziehung\Beruflich\FirmaVorstand;
use Demv\Werte\Person\Beziehung\Beruflich\Geschaeftsfuehrer;
use Demv\Werte\Person\Beziehung\Beruflich\ImmobilienMakler;
use Demv\Werte\Person\Beziehung\Beruflich\Inhaber;
use Demv\Werte\Person\Beziehung\Beruflich\InhaberGeschaeftsfuehrer;
use Demv\Werte\Person\Beziehung\Beruflich\KommanditgesellschaftKommanditist;
use Demv\Werte\Person\Beziehung\Beruflich\KommanditgesellschaftKomplementaer;
use Demv\Werte\Person\Beziehung\Beruflich\Kommanditist;
use Demv\Werte\Person\Beziehung\Beruflich\Komplementaer;
use Demv\Werte\Person\Beziehung\Beruflich\Notar;
use Demv\Werte\Person\Beziehung\Beruflich\NotarMandant;
use Demv\Werte\Person\Beziehung\Beruflich\Patient;
use Demv\Werte\Person\Beziehung\Beruflich\Steuerberater;
use Demv\Werte\Person\Beziehung\Beruflich\SteuerberaterMandant;
use Demv\Werte\Person\Beziehung\Beruflich\VorstandVonFirma;
use Demv\Werte\Person\Beziehung\BeziehungsTypInterface;
use Demv\Werte\Person\Beziehung\Familiaer\CousinCousine;
use Demv\Werte\Person\Beziehung\Familiaer\Eltern;
use Demv\Werte\Person\Beziehung\Familiaer\Enkel;
use Demv\Werte\Person\Beziehung\Familiaer\ExPartner;
use Demv\Werte\Person\Beziehung\Familiaer\Grosseltern;
use Demv\Werte\Person\Beziehung\Familiaer\Kind;
use Demv\Werte\Person\Beziehung\Familiaer\NeffeNichte;
use Demv\Werte\Person\Beziehung\Familiaer\OnkelTante;
use Demv\Werte\Person\Beziehung\Familiaer\Partner;
use Demv\Werte\Person\Beziehung\Familiaer\Schwager;
use Demv\Werte\Person\Beziehung\Familiaer\Schwiegereltern;
use Demv\Werte\Person\Beziehung\Familiaer\Schwiegerkind;
use Demv\Werte\Person\Beziehung\Familiaer\Stiefelternteil;
use Demv\Werte\Person\Beziehung\Familiaer\Stiefkind;
use Demv\Werte\Person\Beziehung\Gegenbeziehung;
use Demv\Werte\Person\Beziehung\GegenbeziehungFactory;
use Demv\Werte\Person\Beziehung\Privat\Eigentuemergemeinschaft;
use Demv\Werte\Person\Beziehung\Privat\FreundBekannter;
use Demv\Werte\Person\Beziehung\Privat\Generalbevollmaechtigter;
use Demv\Werte\Person\Beziehung\Privat\Mitbewohner;
use Demv\Werte\Person\Beziehung\Privat\MitgliedInEigentuemergemeinschaft;
use Demv\Werte\Person\Beziehung\Privat\Verein;
use Demv\Werte\Person\Beziehung\Privat\Vollmachtgeber;
use Demv\Werte\Person\Beziehung\Privat\VorstandVonVerein;
use PHPUnit\Framework\TestCase;

class GegenbeziehungTest extends TestCase
{
    /**
     * @return Gegenbeziehung
     */
    private function getGegenbziehung()
    {
        return GegenbeziehungFactory::create();
    }

    /**
     * @param BeziehungsTypInterface $for
     * @param BeziehungsTypInterface $expected
     */
    private function checkExistence(BeziehungsTypInterface $for, BeziehungsTypInterface $expected): void
    {
        $this->assertTrue($this->getGegenbziehung()->existsFor($for));
        $this->assertEquals($expected->getId(), $this->getGegenbziehung()->getFor($for)->getId());
    }

    public function testPartner(): void
    {
        $this->checkExistence(new Partner(), new Partner());
    }

    public function testEltern(): void
    {
        $this->checkExistence(new Eltern(), new Kind());
    }

    public function testKind(): void
    {
        $this->checkExistence(new Kind(), new Eltern());
    }

    public function testGrosseltern(): void
    {
        $this->checkExistence(new Grosseltern(), new Enkel());
    }

    public function testEnkel(): void
    {
        $this->checkExistence(new Enkel(), new Grosseltern());
    }

    public function testSchwager(): void
    {
        $this->checkExistence(new Schwager(), new Schwager());
    }

    public function testArbeitgeber(): void
    {
        $this->checkExistence(new Arbeitgeber(), new Arbeitnehmer());
    }

    public function testArbeitnehmer(): void
    {
        $this->checkExistence(new Arbeitnehmer(), new Arbeitgeber());
    }

    public function testGeschaeftsfuehrer(): void
    {
        $this->checkExistence(new Geschaeftsfuehrer(), new FirmaVon());
    }

    public function testFirmaVon(): void
    {
        $this->checkExistence(new FirmaVon(), new Geschaeftsfuehrer());
    }

    public function testFirmaVonInhaber(): void
    {
        $this->checkExistence(new FirmaVonInhaber(), new Inhaber());
    }

    public function testInhaber(): void
    {
        $this->checkExistence(new Inhaber(), new FirmaVonInhaber());
    }

    public function testOnkel(): void
    {
        $this->checkExistence(new OnkelTante(), new NeffeNichte());
    }

    public function testNeffe(): void
    {
        $this->checkExistence(new NeffeNichte(), new OnkelTante());
    }

    public function testSchwiegereltern(): void
    {
        $this->checkExistence(new Schwiegereltern(), new Schwiegerkind());
    }

    public function testFreundBekannter(): void
    {
        $this->checkExistence(new FreundBekannter(), new FreundBekannter());
    }

    public function testExPartner(): void
    {
        $this->checkExistence(new ExPartner(), new ExPartner());
    }

    public function testEigentuemergemeinschaft(): void
    {
        $this->checkExistence(new Eigentuemergemeinschaft(), new MitgliedInEigentuemergemeinschaft());
    }

    public function testMitgliedInEigentuemergemeinschaft(): void
    {
        $this->checkExistence(new MitgliedInEigentuemergemeinschaft(), new Eigentuemergemeinschaft());
    }

    public function testStiefkind(): void
    {
        $this->checkExistence(new Stiefkind(), new Stiefelternteil());
    }

    public function testStiefElternteil(): void
    {
        $this->checkExistence(new Stiefelternteil(), new Stiefkind());
    }

    public function testMissing(): void
    {
        $this->expectException(EntryNotFoundException::class);
        $gegenbeziehung = new Gegenbeziehung([]);
        $gegenbeziehung->getFor(new Partner());
    }

    public function testMitbewohner(): void
    {
        $this->checkExistence(new Mitbewohner(), new Mitbewohner());
    }

    public function testVorstandFirma(): void
    {
        $this->checkExistence(new VorstandVonFirma(), new FirmaVorstand());
    }

    public function testVorstandVerein(): void
    {
        $this->checkExistence(new VorstandVonVerein(), new Verein());
    }

    public function testVorstandAufsichtsrat(): void
    {
        $this->checkExistence(new Aufsichtsrat(), new FirmaAufsichtsrat());
    }

    public function testCousinCousine(): void
    {
        $this->checkExistence(new CousinCousine(), new CousinCousine());
    }

    public function testKommanditgesellschaftKommanditist(): void
    {
        $this->checkExistence(new KommanditgesellschaftKommanditist(), new Kommanditist());
    }

    public function testKommanditgesellschaftKomplementaer(): void
    {
        $this->checkExistence(new KommanditgesellschaftKomplementaer(), new Komplementaer());
    }

    public function testAngehoeriger(): void
    {
        $this->checkExistence(new Angehoeriger(), new InhaberGeschaeftsfuehrer());
    }

    public function testGeneralbevollmaechtigter(): void
    {
        $this->checkExistence(new Generalbevollmaechtigter(), new Vollmachtgeber());
    }

    public function testSteuerberater(): void
    {
        $this->checkExistence(new Steuerberater(), new SteuerberaterMandant());
    }

    public function testNotar(): void
    {
        $this->checkExistence(new Notar(), new NotarMandant());
    }

    public function testArzt(): void
    {
        $this->checkExistence(new Arzt(), new Patient());
    }

    public function testImmobilienmaker(): void
    {
        $this->checkExistence(new ImmobilienMakler(), new BautraegerKaeufer());
    }
}
