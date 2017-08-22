<?php

namespace Demv\Werte\Tests\Person\Beziehung;

use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Person\Beziehung\Beruflich\Arbeitgeber;
use Demv\Werte\Person\Beziehung\Beruflich\Arbeitnehmer;
use Demv\Werte\Person\Beziehung\Beruflich\FirmaVon;
use Demv\Werte\Person\Beziehung\Beruflich\FirmaVonInhaber;
use Demv\Werte\Person\Beziehung\Beruflich\Geschaeftsfuehrer;
use Demv\Werte\Person\Beziehung\Beruflich\Inhaber;
use Demv\Werte\Person\Beziehung\BeziehungsTypInterface;
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
use Demv\Werte\Person\Beziehung\Gegenbeziehung;
use Demv\Werte\Person\Beziehung\GegenbeziehungFactory;
use Demv\Werte\Person\Beziehung\Privat\Eigentuemergemeinschaft;
use Demv\Werte\Person\Beziehung\Privat\FreundBekannter;
use Demv\Werte\Person\Beziehung\Privat\MitgliedInEigentuemergemeinschaft;
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
    private function checkExistence(BeziehungsTypInterface $for, BeziehungsTypInterface $expected)
    {
        $this->assertTrue($this->getGegenbziehung()->existsFor($for));
        $this->assertEquals($expected->getId(), $this->getGegenbziehung()->getFor($for)->getId());
    }

    public function testPartner()
    {
        $this->checkExistence(new Partner(), new Partner());
    }

    public function testEltern()
    {
        $this->checkExistence(new Eltern(), new Kind());
    }

    public function testKind()
    {
        $this->checkExistence(new Kind(), new Eltern());
    }

    public function testGrosseltern()
    {
        $this->checkExistence(new Grosseltern(), new Enkel());
    }

    public function testEnkel()
    {
        $this->checkExistence(new Enkel(), new Grosseltern());
    }

    public function testSchwager()
    {
        $this->checkExistence(new Schwager(), new Schwager());
    }

    public function testArbeitgeber()
    {
        $this->checkExistence(new Arbeitgeber(), new Arbeitnehmer());
    }

    public function testArbeitnehmer()
    {
        $this->checkExistence(new Arbeitnehmer(), new Arbeitgeber());
    }

    public function testGeschaeftsfuehrer()
    {
        $this->checkExistence(new Geschaeftsfuehrer(), new FirmaVon());
    }

    public function testFirmaVon()
    {
        $this->checkExistence(new FirmaVon(), new Geschaeftsfuehrer());
    }

    public function testFirmaVonInhaber()
    {
        $this->checkExistence(new FirmaVonInhaber(), new Inhaber());
    }

    public function testInhaber()
    {
        $this->checkExistence(new Inhaber(), new FirmaVonInhaber());
    }

    public function testOnkel()
    {
        $this->checkExistence(new OnkelTante(), new NeffeNichte());
    }

    public function testNeffe()
    {
        $this->checkExistence(new NeffeNichte(), new OnkelTante());
    }

    public function testSchwiegereltern()
    {
        $this->checkExistence(new Schwiegereltern(), new Schwiegerkind());
    }

    public function testFreundBekannter()
    {
        $this->checkExistence(new FreundBekannter(), new FreundBekannter());
    }

    public function testExPartner()
    {
        $this->checkExistence(new ExPartner(), new ExPartner());
    }

    public function testEigentuemergemeinschaft()
    {
        $this->checkExistence(new Eigentuemergemeinschaft(), new MitgliedInEigentuemergemeinschaft());
    }

    public function testMitgliedInEigentuemergemeinschaft()
    {
        $this->checkExistence(new MitgliedInEigentuemergemeinschaft(), new Eigentuemergemeinschaft());
    }

    public function testMissing()
    {
        $this->expectException(EntryNotFoundException::class);
        $gegenbeziehung = new Gegenbeziehung([]);
        $gegenbeziehung->getFor(new Partner());
    }
}