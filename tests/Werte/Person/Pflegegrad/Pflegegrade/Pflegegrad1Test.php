<?php

namespace Demv\Werte\Tests\Person\Pflegegrad\Pflegegrade;

use Codeception\Specify;
use Demv\Werte\Person\Pflegegrad\Pflegegrade\Pflegegrad1;
use Demv\Werte\Person\Pflegegrad\PflegegradInterface;
use PHPUnit\Framework\TestCase;

class Pflegegrad1Test extends TestCase
{
    use Specify;

    /**
     * @var PflegegradInterface
     */
    private $pflegegrad;

    public function setUp(): void
    {
        $this->pflegegrad = new Pflegegrad1();
    }

    public function testId(): void
    {
        $this->assertSame(1, $this->pflegegrad->getId());
    }

    public function testName(): void
    {
        $this->assertSame('Pflegegrad I', $this->pflegegrad->getName());
    }

    public function testMin(): void
    {
        $this->assertEquals(12.5, $this->pflegegrad->getMin());
    }

    public function testMax(): void
    {
        $this->assertEquals(27, $this->pflegegrad->getMax());
    }

    public function testHinweis(): void
    {
        $this->assertSame('Geringe Beeinträchtigung der Selbständigkeit', $this->pflegegrad->getHinweis());
    }
}
