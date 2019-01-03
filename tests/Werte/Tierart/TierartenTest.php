<?php

namespace Demv\Werte\Tests\Tierart;

use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Tests\ProviderTestTrait;
use Demv\Werte\Tierart\Tierarten;
use Demv\Werte\Tierart\Tierarten\Hund;
use Demv\Werte\Tierart\Tierarten\Pferd;
use PHPUnit\Framework\TestCase;

/**
 * Class TierartenTest
 * @package Demv\Werte\Tests\Tierart
 */
final class TierartenTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @return Tierarten
     */
    private function getTierarten(): Tierarten
    {
        return new Tierarten();
    }

    public function testGetAll()
    {
        $tierarten = $this->getTierarten();
        $this->assertCount(2, $tierarten->getAll());
    }

    public function testGetHund()
    {
        $this->checkGetOne($this->getTierarten(), Hund::class);
    }

    public function testGetPferd()
    {
        $this->checkGetOne($this->getTierarten(), Pferd::class);
    }

    public function testNotFound()
    {
        $this->expectException(EntryNotFoundException::class);
        $this->getTierarten()->getOne(3);
    }
}
