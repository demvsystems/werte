<?php

namespace Demv\Werte\Tests\Person\Raucherstatus;

use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Person\Raucherstatus\Raucherstatus;
use Demv\Werte\Person\Raucherstatus\Raucherstatus\Gelegentlich;
use Demv\Werte\Person\Raucherstatus\Raucherstatus\Ja;
use Demv\Werte\Person\Raucherstatus\Raucherstatus\Nein;
use Demv\Werte\Person\Raucherstatus\Raucherstatus\Unbekannt;
use Demv\Werte\Person\Raucherstatus\RaucherstatusInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class RaucherstatusTest
 * @package Demv\Werte\Tests\Person\Raucherstatus
 */
class RaucherstatusTest extends TestCase
{
    /**
     * @var Raucherstatus
     */
    private $provider;

    protected function setUp(): void
    {
        $this->provider = new Raucherstatus();
    }

    public function testGetAllRegistriert()
    {
        $this->assertEquals(4, count($this->provider->getAll()));
    }

    public function testInterface()
    {
        foreach ($this->provider->getAll() as $member) {
            $this->assertInstanceOf(RaucherstatusInterface::class, $member);
        }
    }

    public function testDuplicateEntries()
    {
        $ids = array_map(
            function (RaucherstatusInterface $status) {
                return $status->getId();
            },
            $this->provider->getAll()
        );

        $this->assertEquals(count($ids), count(array_unique($ids)));
    }

    /**
     * @throws EntryNotFoundException
     */
    public function testEntries(): void
    {
        $this->checkGetOne($this->provider, Unbekannt::class);
        $this->checkGetOne($this->provider, Ja::class);
        $this->checkGetOne($this->provider, Nein::class);
        $this->checkGetOne($this->provider, Gelegentlich::class);
    }

    /**
     * @param Raucherstatus $provider
     * @param string        $classname
     *
     * @throws EntryNotFoundException
     */
    private function checkGetOne(Raucherstatus $provider, string $classname): void
    {
        $instance = new $classname();
        $this->assertNotEmpty($provider->getOne($instance->getId()));
        $this->assertTrue($provider->exists($instance->getId()));
        $value = $provider->getOne($instance->getId());
        $this->assertSame($instance->getId(), $value->getId());
        $this->assertInstanceOf($classname, $value);
    }
}
