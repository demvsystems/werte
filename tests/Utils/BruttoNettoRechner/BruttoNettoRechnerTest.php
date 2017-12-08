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
    const MAPPING = [
        15000  => 11884.5,
        20000  => 15846,
        30000  => 22575,
        40000  => 28160,
        50000  => 33595,
        60000  => 39384,
        70000  => 45101,
        80000  => 50920,
        90000  => 57015,
        100000 => 62860,
    ];

    public function testBruttoToNetto(): void
    {
        $rechner = new BruttoNettoRechner();

        foreach (self::MAPPING as $brutto => $netto) {
            $this->assertEquals($netto,
                                $rechner->convertBruttoToNetto($brutto), 'Testfall Brutto:' . $brutto . ' Netto:' . $netto);
        }
    }

    public function testNettoToBrutto(): void
    {
        $rechner = new BruttoNettoRechner();

        foreach (self::MAPPING as $brutto => $netto) {
            $this->assertEquals($brutto,
                                $rechner->convertNettoToBrutto($netto), 'Testfall Netto:' . $netto . ' Brutto:' . $brutto);
        }
    }
}
