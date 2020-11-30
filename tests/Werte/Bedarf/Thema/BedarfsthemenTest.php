<?php

namespace Demv\Werte\Tests\Bedarf\Thema;

use Demv\Werte\Bedarf\Thema\Bedarfsthemen;
use Demv\Werte\Bedarf\Thema\Themen;
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
        $this->assertCount(27, $themen->getAll());
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
}
