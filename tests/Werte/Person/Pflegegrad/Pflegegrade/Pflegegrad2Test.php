<?php

namespace Demv\Werte\Tests\Person\Pflegegrad\Pflegegrade;

use Codeception\Specify;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad2;
use Demv\Werte\Person\Pflegegrad\PflegegradInterface;
use PHPUnit\Framework\TestCase;

class Pflegegrad2Test extends TestCase
{
    use Specify;

    /**
     * @var PflegegradInterface
     */
    private $pflegegrad;

    public function setUp(): void
    {
        $this->pflegegrad = new Pflegegrad2();
    }

    public function testId(): void
    {
        $this->assertSame(2, $this->pflegegrad->getId());
    }

    public function testName(): void
    {
        $this->assertSame('Pflegegrad II', $this->pflegegrad->getName());
    }

    public function testMin(): void
    {
        $this->assertEquals(27, $this->pflegegrad->getMin());
    }

    public function testMax(): void
    {
        $this->assertEquals(47.5, $this->pflegegrad->getMax());
    }

    public function testHinweis(): void
    {
        $this->assertSame('Erhebliche Beeinträchtigung der Selbständigkeit', $this->pflegegrad->getHinweis());
    }
}
