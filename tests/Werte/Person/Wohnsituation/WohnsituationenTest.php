<?php

namespace Demv\Werte\Tests\Person\Wohnsituation;

use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen\BeiAndererPerson;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen\BeiEltern;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen\InEigentum;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen\ZurMiete;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class WohnsituationenTest
 * @package Demv\Werte\Tests\Person\Wohnsituation
 */
class WohnsituationenTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @return Wohnsituationen
     */
    private function getWohnsituationen()
    {
        return new Wohnsituationen();
    }

    public function testGetAll(): void
    {
        $wohnsituationen = $this->getWohnsituationen();
        $this->assertEquals(4, count($wohnsituationen->getAll()));
    }

    public function testZurMiete(): void
    {
        $this->checkGetOne($this->getWohnsituationen(), ZurMiete::class);
    }

    public function testInEigentum(): void
    {
        $this->checkGetOne($this->getWohnsituationen(), InEigentum::class);
    }

    public function testBeiEltern(): void
    {
        $this->checkGetOne($this->getWohnsituationen(), BeiEltern::class);
    }

    public function testBeiAndererPerson(): void
    {
        $this->checkGetOne($this->getWohnsituationen(), BeiAndererPerson::class);
    }

    public function testNotFound(): void
    {
        $this->expectException(EntryNotFoundException::class);
        $this->getWohnsituationen()->getOne(5);
    }
}
