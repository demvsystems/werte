<?php

namespace Demv\Werte\Tests\Hobby;

use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Hobby\Hobbies;
use Demv\Werte\Hobby\Hobbies\Camping;
use Demv\Werte\Hobby\Hobbies\Jagdsport;
use Demv\Werte\Hobby\Hobbies\Luftsport;
use Demv\Werte\Hobby\Hobbies\Wassersport;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class HobbiesTest
 * @package Demv\Werte\Tests\Hobby
 */
final class HobbiesTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @return Hobbies
     */
    private function getHobbies(): Hobbies
    {
        return new Hobbies();
    }

    public function testGetAll()
    {
        $hobbies = $this->getHobbies();
        $this->assertCount(4, $hobbies->getAll());
    }

    public function testGetJagdsport()
    {
        $this->checkGetOne($this->getHobbies(), Jagdsport::class);
    }

    public function testGetWassersport()
    {
        $this->checkGetOne($this->getHobbies(), Wassersport::class);
    }

    public function testGetLuftsport()
    {
        $this->checkGetOne($this->getHobbies(), Luftsport::class);
    }

    public function testGetCamping()
    {
        $this->checkGetOne($this->getHobbies(), Camping::class);
    }

    public function testNotFound()
    {
        $this->expectException(EntryNotFoundException::class);
        $this->getHobbies()->getOne(5);
    }
}