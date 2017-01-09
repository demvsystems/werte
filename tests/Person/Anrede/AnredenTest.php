<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 11:32
 */
use Demv\Werte\Person\Anrede\Anreden;
use Demv\Werte\Exception\EntryNotFoundException;

class AnredenTest extends PHPUnit_Framework_TestCase
{
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

    private function checkGetOne($id)
    {
        $anreden = $this->getAnreden();
        $this->assertNotEmpty($anreden->getOne($id));
        $this->assertTrue($anreden->exists($id));
        $anrede = $anreden->getOne($id);
        $this->assertSame($id, $anrede->getId());
    }

    public function testGetHerr()
    {
        $this->checkGetOne(Anreden::HERR);
    }

    public function testGetFrau()
    {
        $this->checkGetOne(Anreden::FRAU);
    }

    public function testGetFirma()
    {
        $this->checkGetOne(Anreden::FIRMA);
    }

    public function testGetLeer()
    {
        $this->checkGetOne(Anreden::LEER);
    }

    public function testNotFound()
    {
        $this->expectException(EntryNotFoundException::class);
        $this->checkGetOne(5);
    }

}