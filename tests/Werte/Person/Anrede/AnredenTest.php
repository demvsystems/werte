<?php

namespace Demv\Werte\Tests\Person\Anrede;

use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Person\Anrede\Anreden;
use Demv\Werte\Person\Anrede\Anreden\Firma;
use Demv\Werte\Person\Anrede\Anreden\Frau;
use Demv\Werte\Person\Anrede\Anreden\Herr;
use Demv\Werte\Person\Anrede\Anreden\LeereAnrede;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit\Framework\TestCase;

class AnredenTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @return Anreden
     */
    private function getAnreden(): Anreden
    {
        return new Anreden();
    }

    public function testGetAll()
    {
        $anreden = $this->getAnreden();
        $this->assertEquals(4, count($anreden->getAll()));
    }

    public function testGetHerr()
    {
        $this->checkGetOne($this->getAnreden(), Herr::class);
    }

    public function testGetFrau()
    {
        $this->checkGetOne($this->getAnreden(), Frau::class);
    }

    public function testGetFirma()
    {
        $this->checkGetOne($this->getAnreden(), Firma::class);
    }

    public function testGetLeer()
    {
        $this->checkGetOne($this->getAnreden(), LeereAnrede::class);
    }

    public function testNotFound()
    {
        $this->expectException(EntryNotFoundException::class);
        $this->getAnreden()->getOne(5);
    }
}