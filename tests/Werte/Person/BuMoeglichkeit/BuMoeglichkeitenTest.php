<?php

namespace Demv\Werte\Tests\Person\BuMoeglichkeit;

use Demv\Werte\Person\BuMoeglichkeit\BuMoeglichkeiten;
use Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten\Moeglich;
use Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten\NichtMoeglich;
use Demv\Werte\Person\BuMoeglichkeit\Moeglichkeiten\ZeitweiseNichtMoeglich;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class BuMoeglichkeitenTest
 * @package Demv\Werte\Tests\Person\BuMoeglichkeit
 */
class BuMoeglichkeitenTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @return BuMoeglichkeiten
     */
    private function getBuMoeglichkeiten()
    {
        return new BuMoeglichkeiten();
    }

    public function testGetAll(): void
    {
        $provider = $this->getBuMoeglichkeiten();
        $this->assertEquals(3, count($provider->getAll()));
    }

    public function testEntries(): void
    {
        $provider = $this->getBuMoeglichkeiten();
        $this->checkGetOne($provider, Moeglich::class);
        $this->checkGetOne($provider, NichtMoeglich::class);
        $this->checkGetOne($provider, ZeitweiseNichtMoeglich::class);
    }
}
