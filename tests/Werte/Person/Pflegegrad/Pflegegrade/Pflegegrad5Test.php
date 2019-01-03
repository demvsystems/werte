<?php

namespace Demv\Werte\Tests\Person\Pflegegrad\Pflegegrade;

use Codeception\Specify;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad5;
use Demv\Werte\Person\Pflegegrad\PflegegradInterface;
use PHPUnit\Framework\TestCase;

class Pflegegrad5Test extends TestCase
{
    use Specify;

    /**
     * @var PflegegradInterface
     */
    private $pflegegrad;

    public function setUp()
    {
        $this->pflegegrad = new Pflegegrad5();
    }

    public function testId()
    {
        $this->assertSame(5, $this->pflegegrad->getId());
    }

    public function testName()
    {
        $this->assertSame('Pflegegrad V', $this->pflegegrad->getName());
    }

    public function testMin()
    {
        $this->assertEquals(90, $this->pflegegrad->getMin());
    }

    public function testMax()
    {
        $this->assertEquals(100, $this->pflegegrad->getMax());
    }

    public function testHinweis()
    {
        $this->assertSame(
            'Schwerste Beeinträchtigung der Selbstständigkeit mit besonderen Anforderungen an die pflegerische Versorgung',
            $this->pflegegrad->getHinweis());
    }
}
