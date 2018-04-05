<?php

namespace Demv\Werte\Tests\Altersvorsorge;

use Demv\Werte\Altersvorsorge\Produktwissen;
use Demv\Werte\Altersvorsorge\Produktwissen\Lebensversicherung;
use Demv\Werte\Altersvorsorge\Produktwissen\RentenversicherungAnsparphase;
use Demv\Werte\Altersvorsorge\Produktwissen\RentenversicherungAuszahlungsphase;
use Demv\Werte\Altersvorsorge\Produktwissen\TermfixLebensversicherung;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class ProduktwissenTest
 * @package Demv\Werte\Tests\Altersvorsorge
 */
final class ProduktwissenTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @return Produktwissen
     */
    private function getProduktwissen(): Produktwissen
    {
        return new Produktwissen();
    }

    public function testGetAll()
    {
        $this->assertCount(4, $this->getProduktwissen()->getAll());
    }

    public function testGetLebensversicherung()
    {
        $this->checkGetOne($this->getProduktwissen(), Lebensversicherung::class);
    }

    public function testGetRentenversicherungAnsparphase()
    {
        $this->checkGetOne($this->getProduktwissen(), RentenversicherungAnsparphase::class);
    }

    public function testGetRentenversicherungAuszahlungsparphase()
    {
        $this->checkGetOne($this->getProduktwissen(), RentenversicherungAuszahlungsphase::class);
    }

    public function testGetTermfixLebensversicherung()
    {
        $this->checkGetOne($this->getProduktwissen(), TermfixLebensversicherung::class);
    }
}
