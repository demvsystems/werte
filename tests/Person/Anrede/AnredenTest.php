<?php
namespace Demv\Werte\Tests\Person\Anrede;

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 11:32
 */
use Demv\Werte\Person\Anrede\Anreden;
use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit_Framework_TestCase;
use Demv\Werte\Person\Anrede\Anreden\Herr;
use Demv\Werte\Person\Anrede\Anreden\Frau;
use Demv\Werte\Person\Anrede\Anreden\Firma;
use Demv\Werte\Person\Anrede\Anreden\LeereAnrede;

class AnredenTest extends PHPUnit_Framework_TestCase
{
    use ProviderTestTrait;

    /**
     * @return Anreden
     */
    private function getAnreden()
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
        $this->checkGetOne($this->getAnreden(), Herr::ID);
    }

    public function testGetFrau()
    {
        $this->checkGetOne($this->getAnreden(), Frau::ID);
    }

    public function testGetFirma()
    {
        $this->checkGetOne($this->getAnreden(), Firma::ID);
    }

    public function testGetLeer()
    {
        $this->checkGetOne($this->getAnreden(), LeereAnrede::ID);
    }

    public function testNotFound()
    {
        $this->expectException(EntryNotFoundException::class);
        $this->checkGetOne($this->getAnreden(), 5);
    }

}