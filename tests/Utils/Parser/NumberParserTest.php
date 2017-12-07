<?php

namespace Demv\Utils\Tests\Parser;

use Codeception\Specify;
use Demv\Utils\Parser\NumberParser;
use PHPUnit\Framework\TestCase;

/**
 * Class NumberParserTest
 * @package Demv\Utils\Tests\Parser
 */
final class NumberParserTest extends TestCase
{
    use Specify;

    /**
     * @var NumberParser
     */
    private $parser;

    protected function setUp(): void
    {
        $this->parser = NumberParser::new();
    }

    public function testParseFloat(): void
    {
        $this->specify('Leerer String', function (): void {
            $this->assertEquals(0.0, $this->parser->parseFloat(''));
        });

        $this->specify('String ohne Zahlen', function (): void {
            $this->assertEquals(0.0, $this->parser->parseFloat('Hier steht was'));
        });

        $this->specify('String mit Zahlen', function (): void {
            $this->assertEquals(1000.0, $this->parser->parseFloat('1000,00 €'));
        });

        $this->specify('String mit 2 Nachkommastellen mit Komma', function (): void {
            $this->assertEquals(1000.34, $this->parser->parseFloat('1000,34 €'));
        });

        $this->specify('String mit 2 Nachkommastellen mit Punkt', function (): void {
            $this->assertEquals(1000.34, $this->parser->parseFloat('1000.34 €'));
        });

        $this->specify('String mit 1 Nachkommastellen mit Komma', function (): void {
            $this->assertEquals(1000.4, $this->parser->parseFloat('1000,4 €'));
        });

        $this->specify('String mit 1 Nachkommastellen mit Punkt', function (): void {
            $this->assertEquals(1000.4, $this->parser->parseFloat('1000.4 €'));
        });

        $this->specify('String mit 3 Nachkommastellen bzw. Hundertausend', function (): void {
            $this->assertEquals(100365, $this->parser->parseFloat('100.365 Euro'));
        });

        $this->specify('String mit Zahlen (negativer Wert)', function (): void {
            $this->assertEquals(-1000.0, $this->parser->parseFloat('-1000,00 Euro'));
        });

        $this->specify('String mit mehreren Trennzeichen (Deutsches Format)', function (): void {
            $this->assertEquals(1789.0, $this->parser->parseFloat('1.789,00'));
        });

        $this->specify('String mit mehreren Trennzeichen (US Format)', function (): void {
            $this->assertEquals(1000.0, $this->parser->parseFloat('1,000.00'));
        });

        $this->specify('String mit mehreren Tausender-Trennzeichen (DE Format)', function (): void {
            $this->assertEquals(1000000.0, $this->parser->parseFloat('1.000.000'));
        });

        $this->specify('String mit "-"', function (): void {
            $this->assertEquals(-1234.0, $this->parser->parseFloat('-12-34'));
        });

        $this->specify('String ohne Zahl, nur mit "-"', function (): void {
            $this->assertEquals(0, $this->parser->parseFloat('-'));
        });

        $values = [
            '100.365.42'    => 100365.42,
            '100.365,38'    => 100365.38,
            '34.42'         => 34.42,
            '45.46 €'       => 45.46,
            '1.000.000'     => 1000000,
            '1.000.000,00'  => 1000000,
            '1.000.000.00'  => 1000000,
            '1.000.000.03'  => 1000000.03,
            '1.000.000,42'  => 1000000.42,
            '8.8 8'         => 8.8,
            '34.23 42'      => 34.23,
            '23..42'        => 23.42,
            '2.3..42'       => 23.42,
            '2.3.42'        => 23.42,
            '12-3.42'       => 123.42,
            '-12-3.42'      => -123.42,
            '-1--2-3.42'    => -123.42,
            '45qm und 50qm' => 45
        ];
        foreach ($values as $value => $expected) {
            $this->specify(sprintf('String "%s"', $value), function () use ($expected, $value): void {
                $this->assertEquals($expected, $this->parser->parseFloat($value));
            });
        }
    }

    public function testIsParseable(): void
    {
        $this->specify('Mit Zahlen', function (): void {
            $this->assertTrue($this->parser->isParseable('10.000€'));
        });

        $this->specify('Mit Zahlen (sinnlos)', function (): void {
            $this->assertTrue($this->parser->isParseable('1ab5hd5'));
        });
        $this->specify('Mit Zahlen (Trennzeichen)', function (): void {
            $this->assertTrue($this->parser->isParseable('52.658,63€'));
        });

        $this->specify('Nur Zahlen', function (): void {
            $this->assertTrue($this->parser->isParseable('10000'));
        });

        $this->specify('Ohne Zahlen', function (): void {
            $this->assertFalse($this->parser->isParseable('tausend euro'));
        });

        $this->specify('leer', function (): void {
            $this->assertFalse($this->parser->isParseable(''));
        });
    }
}