<?php

namespace Demv\Utils\Tests\BruttoNettoRechner;

use Demv\Utils\BruttoNettoRechner\BruttoNettoRechner;
use PHPUnit\Framework\TestCase;

/**
 * Class BruttoNettoRechnerTest
 * @package Demv\Utils\Tests\BruttoNettoRechner
 */
final class BruttoNettoRechnerTest extends TestCase
{
    /**
     * @param float $brutto
     * @param float $netto
     *
     * @return void
     * @dataProvider provideTestCases
     */
    public function testBruttoToNetto(float $brutto, float $netto): void
    {
        $rechner = new BruttoNettoRechner();

        $this->assertEquals($netto, $rechner->convertBruttoToNetto($brutto), 'Testfall Brutto:' . $brutto . ' Netto:' . $netto);
    }

    /**
     * @param float $netto
     * @param float $brutto
     *
     * @return void
     * @dataProvider provideTestCases
     */
    public function testNettoToBrutto(float $brutto, float $netto): void
    {
        $rechner = new BruttoNettoRechner();

        $this->assertEquals($brutto, $rechner->convertNettoToBrutto($netto), 'Testfall Netto:' . $netto . ' Brutto:' . $brutto);
    }

    public function provideTestCases(): array
    {
        return [
            [15000, 11884.5],
            [20000, 15846],
            [30000, 22575],
            [40000, 28160],
            [50000, 33595],
            [60000, 39384],
            [70000, 45101],
            [80000, 50920],
            [90000, 57015],
            [100000, 62860],
        ];
    }
}
