<?php

namespace Demv\Werte\Tests\Altersvorsorge;

use Demv\Werte\Altersvorsorge\Produkterfahrung;
use Demv\Werte\Altersvorsorge\Produkterfahrung\KeineErfahrung;
use Demv\Werte\Altersvorsorge\Produkterfahrung\VielErfahrung;
use Demv\Werte\Altersvorsorge\Produkterfahrung\WenigErfahrung;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class ProdukterfahrungTest
 * @package Demv\Werte\Tests\Altersvorsorge
 */
final class ProdukterfahrungTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @return Produkterfahrung
     */
    private function getProdukterfahrung(): Produkterfahrung
    {
        return new Produkterfahrung();
    }

    public function testGetAll()
    {
        $this->assertCount(3, $this->getProdukterfahrung()->getAll());
    }

    public function testGetKeineErfahrung()
    {
        $this->checkGetOne($this->getProdukterfahrung(), KeineErfahrung::class);
    }

    public function testGetVielErfahrung()
    {
        $this->checkGetOne($this->getProdukterfahrung(), VielErfahrung::class);
    }

    public function testGetWenigErfahrung()
    {
        $this->checkGetOne($this->getProdukterfahrung(), WenigErfahrung::class);
    }
}
