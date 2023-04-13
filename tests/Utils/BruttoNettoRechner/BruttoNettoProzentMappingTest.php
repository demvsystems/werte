<?php

namespace Demv\Utils\Tests\BruttoNettoRechner;

use Demv\Utils\BruttoNettoRechner\BruttoNettoProzentMapping;
use PHPUnit\Framework\TestCase;

/**
 * Class BruttoNettoProzentMappingTest
 * @package Demv\Utils\Tests\BruttoNettoRechner
 */
final class BruttoNettoProzentMappingTest extends TestCase
{
    public function testProzentIntervalByBrutto(): void
    {
        $mapping = [
            10000  => 79.23,
            20000  => 79.23,
            25000  => 79.23,
            30000  => 75.25,
            35000  => 75.25,
            40000  => 70.40,
            45000  => 70.40,
            50000  => 67.19,
            55000  => 67.19,
            60000  => 65.64,
            65000  => 65.64,
            70000  => 64.43,
            75000  => 64.43,
            80000  => 63.65,
            85000  => 63.65,
            90000  => 63.35,
            95000  => 63.35,
            100000 => 62.86,
            110000 => 62.86,
        ];

        $bruttoProzentMapping = new BruttoNettoProzentMapping();

        foreach ($mapping as $brutto => $prozent) {
            $this->assertEquals(
                $prozent,
                $bruttoProzentMapping->getProzentValueByBrutto($brutto),
                'Testfall Brutto:' . $brutto . ' Netto:' . $prozent
            );
        }
    }

    public function testProzentIntervalByNetto(): void
    {
        $mapping = [
            10000 => 79.23,
            15846 => 79.23,
            20000 => 79.23,
            22575 => 75.25,
            25000 => 75.25,
            28160 => 70.40,
            30000 => 70.40,
            33595 => 67.19,
            35000 => 67.19,
            39384 => 65.64,
            40000 => 65.64,
            45101 => 64.43,
            50000 => 64.43,
            50920 => 63.65,
            55000 => 63.65,
            57015 => 63.35,
            60000 => 63.35,
            62860 => 62.86,
            70000 => 62.86,
        ];

        $bruttoProzentMapping = new BruttoNettoProzentMapping();

        foreach ($mapping as $netto => $prozent) {
            $this->assertEquals(
                $prozent,
                $bruttoProzentMapping->getProzentValueByNetto($netto),
                'Testfall Brutto:' . $netto . ' Netto:' . $prozent
            );
        }
    }
}
