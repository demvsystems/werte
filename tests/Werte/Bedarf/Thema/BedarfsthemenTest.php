<?php

namespace Demv\Werte\Tests\Bedarf\Thema;

use Demv\Werte\Bedarf\Thema\Bedarfsthemen;
use Demv\Werte\Bedarf\Thema\Themen\Altersvorsorge;
use Demv\Werte\Bedarf\Thema\Themen\Berufsunfaehigkeit;
use Demv\Werte\Bedarf\Thema\Themen\PrivateKrankenversicherung;
use Demv\Werte\Bedarf\Thema\Themen\RisikoLeben;
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
        $this->assertCount(4, $themen->getAll());
    }

    public function testGetBerufsunfaehigkeit(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Berufsunfaehigkeit::class);
    }

    public function testGetPKV(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), PrivateKrankenversicherung::class);
    }

    public function testGetRisikoLeben(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), RisikoLeben::class);
    }

    public function testGetAltersVorsorge(): void
    {
        $this->checkGetOne($this->getBedarfsthemen(), Altersvorsorge::class);
    }
}
