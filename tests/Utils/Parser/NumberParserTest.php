<?php

use PHPUnit\Framework\TestCase;
use Demv\Utils\Parser\NumberParser;
use Codeception\Specify;

/**
 * Class NumberParserTest
 */
final class NumberParserTest extends TestCase
{
    use Specify;

    /**
     * @var NumberParser
     */
    private $parser;

    protected function setUp()
    {
        $this->parser = NumberParser::new();
    }

    public function testParseFloat()
    {
        $this->specify('Leerer String', function () {
            $this->assertEquals(0.0, $this->parser->parseFloat(''));
        });

        $this->specify('String ohne Zahlen', function () {
            $this->assertEquals(0.0, $this->parser->parseFloat('Hier steht was'));
        });

        $this->specify('String mit Zahlen', function () {
            $this->assertEquals(1000.0, $this->parser->parseFloat('1000,00 €'));
        });

        $this->specify('String mit 2 Nachkommastellen mit Komma', function () {
            $this->assertEquals(1000.34, $this->parser->parseFloat('1000,34 €'));
        });

        $this->specify('String mit 2 Nachkommastellen mit Punkt', function () {
            $this->assertEquals(1000.34, $this->parser->parseFloat('1000.34 €'));
        });

        $this->specify('String mit 1 Nachkommastellen mit Komma', function () {
            $this->assertEquals(1000.4, $this->parser->parseFloat('1000,4 €'));
        });

        $this->specify('String mit 1 Nachkommastellen mit Punkt', function () {
            $this->assertEquals(1000.4, $this->parser->parseFloat('1000.4 €'));
        });

        $this->specify('String mit 3 Nachkommastellen bzw. Hundertausend', function () {
            $this->assertEquals(100365, $this->parser->parseFloat('100.365 Euro'));
        });

        $this->specify('String mit Zahlen (negativer Wert)', function () {
            $this->assertEquals(-1000.0, $this->parser->parseFloat('-1000,00 Euro'));
        });

        $this->specify('String mit mehreren Trennzeichen (Deutsches Format)', function () {
            $this->assertEquals(1789.0, $this->parser->parseFloat('1.789,00'));
        });

        $this->specify('String mit mehreren Trennzeichen (US Format)', function () {
            $this->assertEquals(1000.0, $this->parser->parseFloat('1,000.00'));
        });

        $this->specify('String mit mehreren Tausender-Trennzeichen (DE Format)', function () {
            $this->assertEquals(1000000.0, $this->parser->parseFloat('1.000.000'));
        });

        $this->specify('String mit "-"', function () {
            $this->assertEquals(-1234.0, $this->parser->parseFloat('-12-34'));
        });
    }
}