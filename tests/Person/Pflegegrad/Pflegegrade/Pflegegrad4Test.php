<?php

namespace Demv\Werte\Tests\Person\Pflegegrad\Pflegegrade;

use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad4;
use Demv\Werte\Person\Pflegegrad\PflegegradInterface;
use PHPUnit\Framework\TestCase;
use Codeception\Specify;

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
        $this->specify('TestId',
            function () {
                $this->assertSame(4, $this->pflegegrad->getId());
            }
        );
    }

    public function testName()
    {
        $this->specify('TestName',
            function () {
                $this->assertSame('Pflegegrad IV', $this->pflegegrad->getName());
            }
        );
    }

    public function testMin()
    {
        $this->specify('TestMin',
            function () {
                $this->assertEquals(70, $this->pflegegrad->getMin());
            }
        );
    }

    public function testMax()
    {
        $this->specify('TestMax',
            function () {
                $this->assertEquals(90, $this->pflegegrad->getMax());
            }
        );
    }

    public function testHinweis()
    {
        $this->specify('TestHinweis',
            function () {
                $this->assertSame('Schwerste Beeinträchtigung der Selbständigkeit', $this->pflegegrad->getHinweis());
            }
        );
    }
}