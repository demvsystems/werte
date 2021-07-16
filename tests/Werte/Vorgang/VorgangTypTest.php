<?php

namespace Demv\Werte\Tests\Vorgang;

use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Tests\ProviderTestTrait;
use Demv\Werte\Vorgang\VorgangTypen;
use Demv\Werte\Vorgang\VorgangTypen\AntragEinreichen;
use Demv\Werte\Vorgang\VorgangTypen\Kuendigung;
use Demv\Werte\Vorgang\VorgangTypen\Risikovoranfrage;
use Demv\Werte\Vorgang\VorgangTypen\Schadenmeldung;
use PHPUnit\Framework\TestCase;

/**
 * Class VorgangTypTest
 * @package Demv\Werte\Tests\Vorgang
 */
final class VorgangTypTest extends TestCase
{
    use ProviderTestTrait;

    private $provider;

    public function __construct()
    {
        parent::__construct();

        $this->provider = new VorgangTypen();
    }

    public function testGetAll(): void
    {
        $vorgangTypen = new VorgangTypen();
        $this->assertCount(4, $vorgangTypen->getAll());
    }

    public function testBenzin(): void
    {
        $this->checkGetOne($this->provider, AntragEinreichen::class);
    }

    public function testDiesel(): void
    {
        $this->checkGetOne($this->provider, Kuendigung::class);
    }

    public function testElektro(): void
    {
        $this->checkGetOne($this->provider, Schadenmeldung::class);
    }

    public function testHybrid(): void
    {
        $this->checkGetOne($this->provider, Risikovoranfrage::class);
    }

    public function testNotFound(): void
    {
        $this->expectException(EntryNotFoundException::class);
        $this->provider->getOne(1337);
    }
}
