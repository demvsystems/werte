<?php
namespace Demv\Werte\Tests\Person\Wohnsituation;

use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Person\Wohnsituation\Wohnsituationen;
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

    public function testGetAll()
    {
        $wohnsituationen = $this->getWohnsituationen();
        $this->assertEquals(3, count($wohnsituationen->getAll()));
    }

    public function testGetHerr()
    {
        $this->checkGetOne($this->getWohnsituationen(), ZurMiete::class);
    }

    public function testGetFrau()
    {
        $this->checkGetOne($this->getWohnsituationen(), InEigentum::class);
    }

    public function testGetFirma()
    {
        $this->checkGetOne($this->getWohnsituationen(), BeiEltern::class);
    }

    public function testNotFound()
    {
        $this->expectException(EntryNotFoundException::class);
        $this->getWohnsituationen()->getOne(4);
    }

}