<?php

namespace Demv\Werte\Tests\Person\Pflegegrad;

use Codeception\Specify;
use Demv\Werte\Person\Pflegegrad\Pflegegrade;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\KeinPflegegrad;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad1;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad2;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad3;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad4;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad5;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class PflegegradeTest
 * @package Demv\Werte\Tests\Person\BuMoeglichkeit
 */
class PflegegradeTest extends TestCase
{
    use ProviderTestTrait;
    use Specify;

    /**
     * @var Pflegegrade
     */
    private $pflegegrade;

    public function setUp(): void
    {
        $this->pflegegrade = new Pflegegrade();
    }

    public function testGetAll(): void
    {
        $this->specify('testGetAll',
            function (): void {
                $this->assertCount(6, $this->pflegegrade->getAll());
            }
        );
    }

    public function testEntries(): void
    {
        $this->specify('testEntries',
            function (): void {
                $this->checkGetOne($this->pflegegrade, KeinPflegegrad::class);
                $this->checkGetOne($this->pflegegrade, Pflegegrad1::class);
                $this->checkGetOne($this->pflegegrade, Pflegegrad2::class);
                $this->checkGetOne($this->pflegegrade, Pflegegrad3::class);
                $this->checkGetOne($this->pflegegrade, Pflegegrad4::class);
                $this->checkGetOne($this->pflegegrade, Pflegegrad5::class);
            }
        );
    }
}
