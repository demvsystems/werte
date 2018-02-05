<?php

namespace Demv\Werte\Tests\Kraftstoff;

use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Kraftstoff\Kraftstoffe;
use Demv\Werte\Kraftstoff\Kraftstoffe\Benzin;
use Demv\Werte\Kraftstoff\Kraftstoffe\Diesel;
use Demv\Werte\Kraftstoff\Kraftstoffe\Elektro;
use Demv\Werte\Kraftstoff\Kraftstoffe\Hybrid;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class KraftstoffTest
 * @package Demv\Werte\Tests\Kraftstoff
 */
final class KraftstoffTest extends TestCase
{
    use ProviderTestTrait;

    private $provider;

    public function __construct()
    {
        parent::__construct();

        $this->provider = new Kraftstoffe();
    }

    public function testGetAll(): void
    {
        $this->assertEquals(5, count($this->provider->getAll()));
    }

    public function testBenzin(): void
    {
        $this->checkGetOne($this->provider, Benzin::class);
    }

    public function testDiesel(): void
    {
        $this->checkGetOne($this->provider, Diesel::class);
    }

    public function testElektro(): void
    {
        $this->checkGetOne($this->provider, Elektro::class);
    }

    public function testHybrid(): void
    {
        $this->checkGetOne($this->provider, Hybrid::class);
    }

    public function testNotFound(): void
    {
        $this->expectException(EntryNotFoundException::class);
        $this->provider->getOne(6);
    }
}