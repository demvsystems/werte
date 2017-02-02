<?php

namespace Demv\Werte\Tests\Person\Pflegegrad\Pflegegrade;

use Demv\Werte\Person\Pflegegrad\Pflegegrade\Keine;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\KeinPflegegrad;
use Demv\Werte\Person\Pflegegrad\PflegegradInterface;
use PHPUnit\Framework\TestCase;
use Codeception\Specify;

class KeinPflegegradTest extends TestCase
{
    use Specify;

    /**
     * @var PflegegradInterface
     */
    private $pflegegrad;

    public function setUp()
    {
        $this->pflegegrad = new KeinPflegegrad();
    }

    public function testId()
    {
        $this->assertSame(0, $this->pflegegrad->getId());
    }

    public function testName()
    {
        $this->assertSame('keine', $this->pflegegrad->getName());
    }

    public function testMin()
    {
        $this->assertEquals(0, $this->pflegegrad->getMin());
    }

    public function testMax()
    {
        $this->assertSame(12.5, $this->pflegegrad->getMax());
    }

    public function testHinweis()
    {
        $this->assertSame('Es besteht keine Beeinträchtigung der Selbständigkeit', $this->pflegegrad->getHinweis());
    }
}