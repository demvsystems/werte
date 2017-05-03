<?php

namespace Demv\Utils\Parser;

use Exception;

/**
 * Diese Klasse kümmert sich um das parsen von Zahlen aus einem String. Hierbei werden alle nicht numerischen Werte entfernt.
 * Als Trennzeichen können sowohl "." als auch "," genutzt werden.
 *
 * Class NumberParser
 * @package Demv\Utils\Parser
 */
final class NumberParser
{
    /**
     * @return NumberParser
     */
    public static function new(): NumberParser
    {
        return new self();
    }

    /**
     * Alles außer Zahlen, Punkt, Komma und Minus wird ignoriert.
     * 2 Nachkommastellen sind maximal erlaubt bzw. werden als solche erkannt.
     *
     * @param string $string
     *
     * @return float
     * @throws Exception
     */
    private function parse(string $string): float
    {
        $s = trim($string);
        $s = preg_replace('/(.+?)\s+.*?$/', '$1', $s);
        $s = preg_replace('/[^\d\.,-]/', '', $s);
        $s = preg_replace('/(?<=\d)(-)/', '', $s);
        $s = preg_replace('/(\.|,){2,}/', '$1', $s);
        $s = preg_replace('/(?:\.|,)(\d{1,2})$/', '_$1', $s);
        $s = preg_replace('/(\d)(?:,|\.)(\d)/', '$1$2', $s);
        $s = str_replace('_', '.', $s);

        if (!empty($s) && !is_numeric($s)) {
            throw new Exception('Invalid numeric value: ' . $s);
        }

        return (float) $s;
    }

    /**
     * Parsed einen String zu einem Zahlenwert. Hierbei werden die enthaltenen Zahlen berücksichtigt und vorhandene Trenn- und Vorzeichen
     * entsprechend berücksichtigt
     *
     * @param string $string
     *
     * @return float
     */
    public function parseFloat(string $string): float
    {
        return $this->parse($string);
    }

    /**
     * Gibt zurück, ob ein String in Zahlen geparsed werden kann
     * Dies ist immer der Fall, wenn der String mind. eine Zahl enthält
     *
     * @param string $string
     *
     * @return bool
     */
    public function isParseable(string $string): bool
    {
        return preg_match('/\\d/', $string);
    }
}