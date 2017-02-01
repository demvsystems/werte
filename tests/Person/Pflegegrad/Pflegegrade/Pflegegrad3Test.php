<?php

namespace Demv\Werte\Tests\Person\Pflegegrad\Pflegegrade;

use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad3;
use Demv\Werte\Person\Pflegegrad\PflegegradInterface;
use PHPUnit\Framework\TestCase;
use Codeception\Specify;

class Pflegegrad3Test extends TestCase
{
    use Specify;

    /**
     * @var PflegegradInterface
     */
    private $pflegegrad;

    public function setUp()
    {
        $this->pflegegrad = new Pflegegrad3();
    }

    public function testId()
    {
        $this->specify('TestId',
            function () {
                $this->assertSame(3, $this->pflegegrad->getId());
            }
        );
    }

    public function testName()
    {
        $this->specify('TestName',
            function () {
                $this->assertSame('Pflegegrad III', $this->pflegegrad->getName());
            }
        );
    }

    public function testMin()
    {
        $this->specify('TestMin',
            function () {
                $this->assertEquals(47.5, $this->pflegegrad->getMin());
            }
        );
    }

    public function testMax()
    {
        $this->specify('TestMax',
            function () {
                $this->assertEquals(70, $this->pflegegrad->getMax());
            }
        );
    }

    public function testHinweis()
    {
        $this->specify('TestHinweis',
            function () {
                $this->assertSame('Schwere Beeinträchtigung der Selbständigkeit', $this->pflegegrad->getHinweis());
            }
        );
    }
}