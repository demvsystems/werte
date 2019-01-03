<?php

namespace Demv\Werte\Tests\Person\Pflegegrad\Pflegegrade;

use Codeception\Specify;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad4;
use Demv\Werte\Person\Pflegegrad\PflegegradInterface;
use PHPUnit\Framework\TestCase;

class Pflegegrad4Test extends TestCase
{
    use Specify;

    /**
     * @var PflegegradInterface
     */
    private $pflegegrad;

    public function setUp()
    {
        $this->pflegegrad = new Pflegegrad4();
    }

    public function testId()
    {
        $this->assertSame(4, $this->pflegegrad->getId());
    }

    public function testName()
    {
        $this->assertSame('Pflegegrad IV', $this->pflegegrad->getName());
    }

    public function testMin()
    {
        $this->assertEquals(70, $this->pflegegrad->getMin());
    }

    public function testMax()
    {
        $this->assertEquals(90, $this->pflegegrad->getMax());
    }

    public function testHinweis()
    {
        $this->assertSame('Schwerste Beeinträchtigung der Selbständigkeit', $this->pflegegrad->getHinweis());
    }
}
