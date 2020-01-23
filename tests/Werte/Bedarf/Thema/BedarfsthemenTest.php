<?php

namespace Demv\Werte\Tests\Bedarf\Thema;

use Demv\Werte\Bedarf\Thema\Bedarfsthemen;
use Demv\Werte\Bedarf\Thema\Themen\Altersvorsorge;
use Demv\Werte\Bedarf\Thema\Themen\AmbulanteKrankenzusatzversicherung;
use Demv\Werte\Bedarf\Thema\Themen\AuslandsKV;
use Demv\Werte\Bedarf\Thema\Themen\Bauherren;
use Demv\Werte\Bedarf\Thema\Themen\Berufsunfaehigkeit;
use Demv\Werte\Bedarf\Thema\Themen\Camping;
use Demv\Werte\Bedarf\Thema\Themen\DreadDisease;
use Demv\Werte\Bedarf\Thema\Themen\Erwerbsunfaehigkeit;
use Demv\Werte\Bedarf\Thema\Themen\Grundfaehigkeit;
use Demv\Werte\Bedarf\Thema\Themen\Jagdhaftpflicht;
use Demv\Werte\Bedarf\Thema\Themen\Krankentagegeld;
use Demv\Werte\Bedarf\Thema\Themen\KVZStationaer;
use Demv\Werte\Bedarf\Thema\Themen\Luftfahrthaftpflicht;
use Demv\Werte\Bedarf\Thema\Themen\Photovoltaik;
use Demv\Werte\Bedarf\Thema\Themen\PrivateKrankenversicherung;
use Demv\Werte\Bedarf\Thema\Themen\Risikoleben;
use Demv\Werte\Bedarf\Thema\Themen\Tierhalterhaftpflicht;
use Demv\Werte\Bedarf\Thema\Themen\Zahnzusatz;
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
        $this->assertCount(25, $themen->getAll());
    }

    public function testGetBerufsunfaehigkeit(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Berufsunfaehigkeit::class);
    }

    public function testGetPKV(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), PrivateKrankenversicherung::class);
    }

    public function testGetRisikoleben(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Risikoleben::class);
    }

    public function testGetAltersVorsorge(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Altersvorsorge::class);
    }

    public function testGetKTG(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Krankentagegeld::class);
    }

    public function testGetStationaer(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), KVZStationaer::class);
    }

    public function testGetZahnzusatz(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Zahnzusatz::class);
    }

    public function testGetAmbulanteKrankenzusatzversicherung(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), AmbulanteKrankenzusatzversicherung::class);
    }

    public function testGetAuslandsKV(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), AuslandsKV::class);
    }

    public function testGetBauherren(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Bauherren::class);
    }

    public function testGetCamping(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Camping::class);
    }

    public function testGetDreadDisease(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), DreadDisease::class);
    }

    public function testGetErwerbsunfaehigkeit(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Erwerbsunfaehigkeit::class);
    }

    public function testGetGrundfaehigkeit(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Grundfaehigkeit::class);
    }

    public function testGetJagdhaftpflicht(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Jagdhaftpflicht::class);
    }

    public function testGetLuftfahrthaftpflicht(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Luftfahrthaftpflicht::class);
    }

    public function testGetPhotovoltaik(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Photovoltaik::class);
    }

    public function testGetTierhalterhaftpflicht(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Tierhalterhaftpflicht::class);
    }
}
