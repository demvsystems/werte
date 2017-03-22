<?php

namespace Demv\Utils\BruttoNettoRechner;

/**
 * schätzt zu einem Nettogehalt das Bruttogehalt und zu einem Bruttogehalt das Nettogehalt
 *
 * Class BruttoToNettoRechner
 * @package Demv\Utils\BruttoNettoRechner
 */
final class BruttoNettoRechner
{
    /**
     * @var BruttoNettoProzentMapping
     */
    private $mapping;

    /**
     * BruttoToNettoRechner constructor.
     */
    public function __construct()
    {
        $this->mapping = new BruttoNettoProzentMapping();
    }

    /**
     * wandelt einen Bruttobetrag in einen Nettobetrag um
     *
     * @param float $brutto Bruttobetrag
     *
     * @return float Nettobetrag
     */
    public function convertBruttoToNetto(float $brutto): float
    {
        $prozent = $this->mapping->getProzentValueByBrutto($brutto);

        return $this->calculateNettoByProzent($brutto, $prozent);
    }

    /**
     * wandelt einen Nettobetrag in einen Bruttobetrag um
     *
     * @param float $netto Nettobetrag
     *
     * @return float Bruttobetrag
     */
    public function convertNettoToBrutto(float $netto)
    {
        $prozent = $this->mapping->getProzentValueByNetto($netto);

        return $this->calculateBruttoByProzent($netto, $prozent);
    }

    /**
     * berechnet zu einem Brutto und einem Prozentwert das Netto
     *
     * @param float $brutto  Brutto
     * @param float $prozent Prozent
     *
     * @return float Netto
     */
    private function calculateNettoByProzent(float $brutto, float $prozent): float
    {
        return (float) $brutto / 100 * $prozent;
    }

    /**
     * berechnet zu einem Netto und einem Prozentwert das Brutto
     *
     * @param float $netto
     * @param float $prozent
     *
     * @return float
     */
    private function calculateBruttoByProzent(float $netto, float $prozent): float
    {
        return (float) $netto * 100 / $prozent;
    }
}