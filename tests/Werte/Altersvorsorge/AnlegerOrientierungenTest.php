<?php

namespace Demv\Werte\Tests\Altersvorsorge;

use Demv\Werte\Altersvorsorge\AnlegerOrientierungen;
use Demv\Werte\Altersvorsorge\AnlegerOrientierungen\Konservativ;
use Demv\Werte\Altersvorsorge\AnlegerOrientierungen\Risikoorientiert;
use Demv\Werte\Altersvorsorge\AnlegerOrientierungen\Sicherheitsorientiert;
use Demv\Werte\Altersvorsorge\AnlegerOrientierungen\Wachstumsorientiert;
use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class AnlegerOrientierungenTest
 * @package Demv\Werte\Tests\Altersvorsorge
 */
final class AnlegerOrientierungenTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @return AnlegerOrientierungen
     */
    private function getAnlegerOrientierungen(): AnlegerOrientierungen
    {
        return new AnlegerOrientierungen();
    }

    public function testGetAll(): void
    {
        $adressTypen = $this->getAnlegerOrientierungen();
        $this->assertCount(4, $adressTypen->getAll());
    }

    public function testGetsicherheitsorientiert(): void
    {
        $this->checkGetOne($this->getAnlegerOrientierungen(), Sicherheitsorientiert::class);
    }

    public function testGetKonservativ(): void
    {
        $this->checkGetOne($this->getAnlegerOrientierungen(), Konservativ::class);
    }

    public function testGetWachstumsorientiert(): void
    {
        $this->checkGetOne($this->getAnlegerOrientierungen(), Wachstumsorientiert::class);
    }

    public function testGetRisikoorientiert(): void
    {
        $this->checkGetOne($this->getAnlegerOrientierungen(), Risikoorientiert::class);
    }

    /**
     * @throws EntryNotFoundException
     */
    public function testNotFound(): void
    {
        $this->expectException(EntryNotFoundException::class);
        $this->getAnlegerOrientierungen()->getOne(5);
    }
}
