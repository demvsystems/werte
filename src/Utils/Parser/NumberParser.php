<?php

namespace Demv\Utils\Parser;

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
     * Such den Offset für die Nachkommastellen, sofern einer existiert.
     * Maximal 2 Nachkommastellen sind valide bzw. werden als solche erkannt.
     *
     * @param string $s
     *
     * @return int
     */
    private function offsetOf(string $s): int
    {
        $len = strlen($s);
        foreach (['.', ','] as $offset) {
            if (($pos = strrpos($s, $offset)) !== false && $pos >= ($len - 3)) {
                return $pos;
            }
        }

        return 0;
    }

    /**
     * Alles außer Zahlen, Punkt, Komma und Minus wird ignoriert.
     * 2 Nachkommastellen sind maximal erlaubt bzw. werden als solche erkannt.
     *
     * @param string $string
     *
     * @return string
     */
    private function parse(string $string)
    {
        $s = trim($string);
        $s = preg_replace('/[^\d\.,-]/', '', $s);
        for ($i = 1, $l = strlen($s) - $this->offsetOf($s); $i < $l; $i++) {
            if (in_array($s[$i], [',', '.', '-'])) {
                $s[$i] = '_';
            }
        }

        $s = str_replace(['_', ','], ['', '.'], $s);

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
}