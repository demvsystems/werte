<?php

namespace Demv\Werte\Tests\Sparte\Krankenversicherung;

use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherung;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen\Beihilfe;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen\FreieHeilfuersorge;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen\GKV;
use Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen\PKV;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class KrankenversicherungTest
 * @package Demv\Werte\Tests\Sparte\Krankenversicherung
 */
final class KrankenversicherungTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @return Krankenversicherung
     */
    private function getKrankenversicherung(): Krankenversicherung
    {
        return new Krankenversicherung();
    }

    public function testGetAll(): void
    {
        $anreden = $this->getKrankenversicherung();
        $this->assertEquals(4, count($anreden->getAll()));
    }

    public function testGetHerr(): void
    {
        $this->checkGetOne($this->getKrankenversicherung(), GKV::class);
    }

    public function testGetFrau(): void
    {
        $this->checkGetOne($this->getKrankenversicherung(), PKV::class);
    }

    public function testGetFirma(): void
    {
        $this->checkGetOne($this->getKrankenversicherung(), FreieHeilfuersorge::class);
    }

    public function testGetLeer(): void
    {
        $this->checkGetOne($this->getKrankenversicherung(), Beihilfe::class);
    }

    public function testNotFound(): void
    {
        $this->expectException(EntryNotFoundException::class);
        $this->getKrankenversicherung()->getOne(5);
    }
}
