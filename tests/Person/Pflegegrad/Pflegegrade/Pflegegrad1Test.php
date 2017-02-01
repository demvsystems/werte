<?php

namespace Demv\Werte\Tests\Person\Pflegegrad\Pflegegrade;

use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad1;
use Demv\Werte\Person\Pflegegrad\PflegegradInterface;
use PHPUnit\Framework\TestCase;
use Codeception\Specify;

class Pflegegrad1Test extends TestCase
{
    use Specify;

    /**
     * @var PflegegradInterface
     */
    private $pflegegrad;

    public function setUp()
    {
        $this->pflegegrad = new Pflegegrad1();
    }

    public function testId()
    {
        $this->specify('TestId',
            function () {
                $this->assertSame(1, $this->pflegegrad->getId());
            }
        );
    }

    public function testName()
    {
        $this->specify('TestName',
            function () {
                $this->assertSame('Pflegegrad I', $this->pflegegrad->getName());
            }
        );
    }

    public function testMin()
    {
        $this->specify('TestMin',
            function () {
                $this->assertEquals(12.5, $this->pflegegrad->getMin());
            }
        );
    }

    public function testMax()
    {
        $this->specify('TestMax',
            function () {
                $this->assertEquals(27, $this->pflegegrad->getMax());
            }
        );
    }

    public function testHinweis()
    {
        $this->specify('TestHinweis',
            function () {
                $this->assertSame('Geringe Beeinträchtigung der Selbständigkeit', $this->pflegegrad->getHinweis());
            }
        );
    }
}