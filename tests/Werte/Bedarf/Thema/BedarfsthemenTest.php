<?php

namespace Demv\Werte\Tests\Bedarf\Thema;

use Demv\Werte\Bedarf\Thema\Bedarfsthemen;
use Demv\Werte\Bedarf\Thema\Themen\Altersvorsorge;
use Demv\Werte\Bedarf\Thema\Themen\AmbulanteKrankenzusatzversicherung;
use Demv\Werte\Bedarf\Thema\Themen\Berufsunfaehigkeit;
use Demv\Werte\Bedarf\Thema\Themen\Krankentagegeld;
use Demv\Werte\Bedarf\Thema\Themen\KVZStationaer;
use Demv\Werte\Bedarf\Thema\Themen\PrivateKrankenversicherung;
use Demv\Werte\Bedarf\Thema\Themen\Risikoleben;
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
        $this->assertCount(15, $themen->getAll());
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
}
