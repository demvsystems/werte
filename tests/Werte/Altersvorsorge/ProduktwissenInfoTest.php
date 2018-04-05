<?php

namespace Demv\Werte\Tests\Altersvorsorge;

use Demv\Werte\Altersvorsorge\Produktwissen\Info\Fondsgebunden;
use Demv\Werte\Altersvorsorge\Produktwissen\Info\Hybrid;
use Demv\Werte\Altersvorsorge\Produktwissen\Info\Klassisch;
use Demv\Werte\Altersvorsorge\ProduktwissenInfo;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class ProduktwissenInfoTest
 * @package Demv\Werte\Tests\Altersvorsorge
 */
final class ProduktwissenInfoTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @return ProduktwissenInfo
     */
    private function getProduktwissenInfo(): ProduktwissenInfo
    {
        return new ProduktwissenInfo();
    }

    public function testGetAll()
    {
        $this->assertCount(3, $this->getProduktwissenInfo()->getAll());
    }

    public function testGetFondsgebunden()
    {
        $this->checkGetOne($this->getProduktwissenInfo(), Fondsgebunden::class);
    }

    public function testGetHybrid()
    {
        $this->checkGetOne($this->getProduktwissenInfo(), Hybrid::class);
    }

    public function testGetKlassisch()
    {
        $this->checkGetOne($this->getProduktwissenInfo(), Klassisch::class);
    }
}
