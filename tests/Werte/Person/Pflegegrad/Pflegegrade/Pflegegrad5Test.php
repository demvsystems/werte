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

    public function setUp(): void
    {
        $this->pflegegrad = new Pflegegrad5();
    }

    public function testId(): void
    {
        $this->assertSame(5, $this->pflegegrad->getId());
    }

    public function testName(): void
    {
        $this->assertSame('Pflegegrad V', $this->pflegegrad->getName());
    }

    public function testMin(): void
    {
        $this->assertEquals(90, $this->pflegegrad->getMin());
    }

    public function testMax(): void
    {
        $this->assertEquals(100, $this->pflegegrad->getMax());
    }

    public function testHinweis(): void
    {
        $this->assertSame(
            'Schwerste Beeinträchtigung der Selbstständigkeit mit besonderen Anforderungen an die pflegerische Versorgung',
            $this->pflegegrad->getHinweis());
    }
}