<?php

namespace Demv\Werte\Tests\Person\Familienstaende;

use Codeception\Specify;
use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Person\Familienstand\Familienstaende;
use Demv\Werte\Person\Familienstand\Familienstaende\EingetrageneLebenspartnerschaft;
use Demv\Werte\Person\Familienstand\Familienstaende\Geschieden;
use Demv\Werte\Person\Familienstand\Familienstaende\GetrenntLebend;
use Demv\Werte\Person\Familienstand\Familienstaende\Lebensgemeinschaft;
use Demv\Werte\Person\Familienstand\Familienstaende\Ledig;
use Demv\Werte\Person\Familienstand\Familienstaende\Unbekannt;
use Demv\Werte\Person\Familienstand\Familienstaende\Verheiratet;
use Demv\Werte\Person\Familienstand\Familienstaende\Verwitwet;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit\Framework\TestCase;

class FamilienstaendeTest extends TestCase
{
    use ProviderTestTrait;
    use Specify;

    /**
     * @return Familienstaende
     */
    private function getProvider()
    {
        return new Familienstaende();
    }

    public function testGetAll()
    {
        $this->assertEquals(8, count($this->getProvider()->getAll()));
    }

    public function testEntries()
    {
        $entries = [
            Ledig::class,
            Verheiratet::class,
            GetrenntLebend::class,
            Geschieden::class,
            Verwitwet::class,
            Unbekannt::class,
            EingetrageneLebenspartnerschaft::class,
            Lebensgemeinschaft::class
        ];

        foreach ($entries as $entry) {
            $this->specify(sprintf('Überprüft den Eintrag für %s', $entry, function () use ($entry) {
                $this->checkGetOne($this->getProvider(), $entry);
            }));
        }
    }

    public function testNotFound()
    {
        $this->expectException(EntryNotFoundException::class);
        $this->getProvider()->getOne(9);
    }
}
