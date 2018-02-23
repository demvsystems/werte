<?php

namespace Demv\Werte\Tests\Person\Pflegegrad\Pflegegrade;

use Codeception\Specify;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\KeinPflegegrad;
use Demv\Werte\Person\Pflegegrad\PflegegradInterface;
use PHPUnit\Framework\TestCase;

class KeinPflegegradTest extends TestCase
{
    use Specify;

    /**
     * @var PflegegradInterface
     */
    private $pflegegrad;

    public function setUp(): void
    {
        $this->pflegegrad = new KeinPflegegrad();
    }

    public function testId(): void
    {
        $this->assertSame(0, $this->pflegegrad->getId());
    }

    public function testName(): void
    {
        $this->assertSame('Kein Pflegegrad', $this->pflegegrad->getName());
    }

    public function testMin(): void
    {
        $this->assertEquals(0, $this->pflegegrad->getMin());
    }

    public function testMax(): void
    {
        $this->assertSame(12.5, $this->pflegegrad->getMax());
    }

    public function testHinweis(): void
    {
        $this->assertSame('Es besteht keine Beeinträchtigung der Selbständigkeit', $this->pflegegrad->getHinweis());
    }
}
