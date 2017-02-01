<?php

namespace Demv\Werte\Tests\Person\Pflegegrad\Pflegegrade;

use Demv\Werte\Person\Pflegegrad\Pflegegrade\Keine;
use Demv\Werte\Person\Pflegegrad\PflegegradInterface;
use PHPUnit\Framework\TestCase;
use Codeception\Specify;

class KeineTest extends TestCase
{
    use Specify;

    /**
     * @var PflegegradInterface
     */
    private $pflegegrad;

    public function setUp()
    {
        $this->pflegegrad = new Keine();
    }

    public function testId()
    {
        $this->specify('TestId',
            function () {
                $this->assertSame(0, $this->pflegegrad->getId());
            }
        );
    }

    public function testName()
    {
        $this->specify('TestName',
            function () {
                $this->assertSame('keine', $this->pflegegrad->getName());
            }
        );
    }

    public function testMin()
    {
        $this->specify('TestMin',
            function () {
                #$this->assertSame(0, $this->pflegegrad->getMin());
                $this->assertEquals(0, $this->pflegegrad->getMin());
            }
        );
    }

    public function testMax()
    {
        $this->specify('TestMax',
            function () {
                $this->assertSame(12.5, $this->pflegegrad->getMax());
            }
        );
    }

    public function testHinweis()
    {
        $this->specify('TestHinweis',
            function () {
                $this->assertSame('Es besteht keine Beeinträchtigung der Selbständigkeit', $this->pflegegrad->getHinweis());
            }
        );
    }
}