<?php

namespace Demv\Werte\Tests\Bedarf\Thema;

use Demv\Werte\Bedarf\Thema\Bedarfsthemen;
use Demv\Werte\Bedarf\Thema\Themen;
use Demv\Werte\Person\Taetigkeitsstatus\Status\BeamterAufLebenszeit;
use Demv\Werte\Person\Taetigkeitsstatus\Status\BeamterAufProbe;
use Demv\Werte\Person\Taetigkeitsstatus\Status\BeamterAufWiderruf;
use Demv\Werte\Person\Taetigkeitsstatus\Status\BeamterAufZeit;
use Demv\Werte\Person\Taetigkeitsstatus\Status\BeamterAusschliesslichAufProbe;
use Demv\Werte\Person\Taetigkeitsstatus\Status\Selbststaendiger;
use Demv\Werte\Person\Taetigkeitsstatus\Taetigkeitsstatus;
use Demv\Werte\Person\Taetigkeitsstatus\TaetigkeitsstatusInterface;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class BedarfsthemenTest
 * @package Demv\Werte\Tests\Bedarf\Thema
 */
final class BedarfsthemenTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @return Bedarfsthemen
     */
    private function getBedarfsthemen(): Bedarfsthemen
    {
        return new Bedarfsthemen();
    }

    public function testGetAll(): void
    {
        $themen = $this->getBedarfsthemen();
        $this->assertCount(37, $themen->getAll());
    }

    public function testGetBerufsunfaehigkeit(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Berufsunfaehigkeit::class);
    }

    public function testGetPKV(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\PrivateKrankenversicherung::class);
    }

    public function testGetRisikoleben(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Risikoleben::class);
    }

    public function testGetAltersVorsorge(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Altersvorsorge::class);
    }

    public function testGetKTG(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Krankentagegeld::class);
    }

    public function testGetStationaer(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\KVZStationaer::class);
    }

    public function testGetZahnzusatz(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Zahnzusatz::class);
    }

    public function testGetAmbulanteKrankenzusatzversicherung(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\AmbulanteKrankenzusatzversicherung::class);
    }

    public function testGetAuslandsKV(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\AuslandsKV::class);
    }

    public function testGetBauherren(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Bauherren::class);
    }

    public function testGetCamping(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Camping::class);
    }

    public function testGetDreadDisease(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\DreadDisease::class);
    }

    public function testGetErwerbsunfaehigkeit(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Erwerbsunfaehigkeit::class);
    }

    public function testGetGrundfaehigkeit(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Grundfaehigkeit::class);
    }

    public function testGetJagdhaftpflicht(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Jagdhaftpflicht::class);
    }

    public function testGetLuftfahrthaftpflicht(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Luftfahrthaftpflicht::class);
    }

    public function testGetPhotovoltaik(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Photovoltaik::class);
    }

    public function testGetTierhalterhaftpflicht(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Tierhalterhaftpflicht::class);
    }

    public function testGetKinderinvaliditaet(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Kinderinvaliditaet::class);
    }

    public function testGetFunktionsinvaliditaet(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Funktionsinvaliditaet::class);
    }

    public function testGetBerufshaftpflicht(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Berufshaftpflicht::class);
    }

    public function testGetGeschaeftsinhaltsversicherung(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Geschaeftsinhaltsversicherung::class);
    }

    public function testGetVermoegensschadenhaftpflicht(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Vermoegensschadenhaftpflicht::class);
    }

    public function testGetBetriebshaftpflicht(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Betriebshaftpflicht::class);
    }

    public function testGetD_0(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\D_O::class);
    }

    public function testGetFirmenrechtsschutz(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Firmenrechtsschutz::class);
    }

    public function testGetGewerblicheGebaeudeversicherung(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\GewerblicheGebaeudeversicherung::class);
    }

    public function testGetCyberversicherung(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Cyberversicherung::class);
    }

    public function testGetDiensthaftpflicht(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Diensthaftpflicht::class);
    }

    public function testGetDienstunfaehigkeitsversicherung(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Themen\Dienstunfaehigkeitsversicherung::class);
    }

    public function testGetBedarfsthemenForGewerbe(): void
    {
        $should = [
            new Themen\Berufshaftpflicht(),
            new Themen\Geschaeftsinhaltsversicherung(),
            new Themen\Vermoegensschadenhaftpflicht(),
            new Themen\Betriebshaftpflicht(),
            new Themen\D_O(),
            new Themen\Firmenrechtsschutz(),
            new Themen\GewerblicheGebaeudeversicherung(),
            new Themen\Cyberversicherung()
        ];

        $is = $this->getBedarfsthemen()->forGewerbe();
        $this->assertCount(count($should), $is);
        foreach ($is as $thema) {
            $this->assertTrue(in_array($thema, $should, false));
        }
    }

    public function testGetBedarfsthemenForSelbststaendig(): void
    {
        $should = [
            new Themen\Berufsunfaehigkeit(),
            new Themen\PrivateKrankenversicherung(),
            new Themen\Risikoleben(),
            new Themen\Altersvorsorge(),
            new Themen\KVZStationaer(),
            new Themen\Zahnzusatz(),
            new Themen\Krankentagegeld(),
            new Themen\Hausrat(),
            new Themen\Kfz(),
            new Themen\Pflegevorsorge(),
            new Themen\Privathaftpflicht(),
            new Themen\Rechtsschutz(),
            new Themen\Unfallversicherung(),
            new Themen\Wohngebaeude(),
            new Themen\AmbulanteKrankenzusatzversicherung(),
            new Themen\AuslandsKV(),
            new Themen\Bauherren(),
            new Themen\Camping(),
            new Themen\DreadDisease(),
            new Themen\Erwerbsunfaehigkeit(),
            new Themen\Grundfaehigkeit(),
            new Themen\Jagdhaftpflicht(),
            new Themen\Luftfahrthaftpflicht(),
            new Themen\Photovoltaik(),
            new Themen\Tierhalterhaftpflicht(),
            new Themen\Kinderinvaliditaet(),
            new Themen\Funktionsinvaliditaet(),
            new Themen\Berufshaftpflicht(),
            new Themen\Geschaeftsinhaltsversicherung(),
            new Themen\Vermoegensschadenhaftpflicht(),
            new Themen\Betriebshaftpflicht(),
            new Themen\D_O(),
            new Themen\Firmenrechtsschutz(),
            new Themen\GewerblicheGebaeudeversicherung(),
            new Themen\Cyberversicherung()
        ];

        $is = $this->getBedarfsthemen()->forTaetigkeit(Selbststaendiger::ID);
        $this->assertCount(count($should), $is);
        foreach ($is as $thema) {
            $this->assertTrue(in_array($thema, $should, false));
        }
    }

    public function testGetBedarfsthemenForVerbeamtet(): void
    {
        $should = [
            new Themen\Berufsunfaehigkeit(),
            new Themen\PrivateKrankenversicherung(),
            new Themen\Risikoleben(),
            new Themen\Altersvorsorge(),
            new Themen\KVZStationaer(),
            new Themen\Zahnzusatz(),
            new Themen\Krankentagegeld(),
            new Themen\Hausrat(),
            new Themen\Kfz(),
            new Themen\Pflegevorsorge(),
            new Themen\Privathaftpflicht(),
            new Themen\Rechtsschutz(),
            new Themen\Unfallversicherung(),
            new Themen\Wohngebaeude(),
            new Themen\AmbulanteKrankenzusatzversicherung(),
            new Themen\AuslandsKV(),
            new Themen\Bauherren(),
            new Themen\Camping(),
            new Themen\DreadDisease(),
            new Themen\Erwerbsunfaehigkeit(),
            new Themen\Grundfaehigkeit(),
            new Themen\Jagdhaftpflicht(),
            new Themen\Luftfahrthaftpflicht(),
            new Themen\Photovoltaik(),
            new Themen\Tierhalterhaftpflicht(),
            new Themen\Kinderinvaliditaet(),
            new Themen\Funktionsinvaliditaet(),
            new Themen\Dienstunfaehigkeitsversicherung(),
            new Themen\Diensthaftpflicht(),
        ];

        foreach (
            [
                BeamterAufLebenszeit::ID,
                BeamterAufProbe::ID,
                BeamterAufWiderruf::ID,
                BeamterAusschliesslichAufProbe::ID,
                BeamterAufZeit::ID
            ] as $taetigkeit) {
            $is = $this->getBedarfsthemen()->forTaetigkeit($taetigkeit);
            $this->assertCount(count($should), $is);
            foreach ($is as $thema) {
                $this->assertTrue(in_array($thema, $should, false));
            }
        }
    }

    /**
     * Person is everything except Selbständig, Verbeamtet, Firma
     */
    public function testGetBedarfsthemenForPerson(): void
    {
        $should = [
            new Themen\Berufsunfaehigkeit(),
            new Themen\PrivateKrankenversicherung(),
            new Themen\Risikoleben(),
            new Themen\Altersvorsorge(),
            new Themen\KVZStationaer(),
            new Themen\Zahnzusatz(),
            new Themen\Krankentagegeld(),
            new Themen\Hausrat(),
            new Themen\Kfz(),
            new Themen\Pflegevorsorge(),
            new Themen\Privathaftpflicht(),
            new Themen\Rechtsschutz(),
            new Themen\Unfallversicherung(),
            new Themen\Wohngebaeude(),
            new Themen\AmbulanteKrankenzusatzversicherung(),
            new Themen\AuslandsKV(),
            new Themen\Bauherren(),
            new Themen\Camping(),
            new Themen\DreadDisease(),
            new Themen\Erwerbsunfaehigkeit(),
            new Themen\Grundfaehigkeit(),
            new Themen\Jagdhaftpflicht(),
            new Themen\Luftfahrthaftpflicht(),
            new Themen\Photovoltaik(),
            new Themen\Tierhalterhaftpflicht(),
            new Themen\Kinderinvaliditaet(),
            new Themen\Funktionsinvaliditaet(),
        ];

        $taetigkeiten = array_filter((new Taetigkeitsstatus())->getAll(), static function ($taetigkeit) {
            return !in_array(
                $taetigkeit::ID,
                [
                    BeamterAufLebenszeit::ID,
                    BeamterAufProbe::ID,
                    BeamterAufWiderruf::ID,
                    BeamterAusschliesslichAufProbe::ID,
                    BeamterAufZeit::ID,
                    Selbststaendiger::ID
                ], true);
        });

        foreach (array_merge([null], $taetigkeiten) as $taetigkeit) {
            $themen = $this->getBedarfsthemen()->forTaetigkeit($taetigkeit instanceof TaetigkeitsstatusInterface
                ? $taetigkeit::ID
                : null);
            $this->assertCount(count($should), $themen);
            foreach ($themen as $thema) {
                $this->assertTrue(in_array($thema, $should, false));
            }
        }
    }
}
