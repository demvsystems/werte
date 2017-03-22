<?php

namespace Demv\Utils\BruttoNettoRechner;

/**
 * Klasse kappselt das Mapping zwischen Brutto, Netto und Prozentwert
 *
 * Class BruttoProzentMapping
 * @package Demv\Utils\BrottuNettoRechner
 */
final class BruttoNettoProzentMapping
{
    /**
     * @var array
     */
    private $mapping;

    /**
     * BruttoProzentMapping constructor.
     */
    public function __construct()
    {
        $this->mapping = $this->getMapping();
    }

    /**
     * gibt den Prozentwert zu einem Bruttobetrag zurück
     *
     * @param float $brutto Brutto
     *
     * @return float Prozentwert
     */
    public function getProzentValueByBrutto(float $brutto): float
    {
        if ($brutto < $this->mapping[0]['brutto']) {
            return $this->mapping[0]['prozent'];
        }

        $testValue = last($this->mapping);
        if ($brutto >= $testValue['brutto']) {
            return $testValue['prozent'];
        }

        for ($i = 1, $iMax = count($this->mapping); $i < $iMax; $i++) {
            $lastValue    = $this->mapping[$i - 1];
            $currentValue = $this->mapping[$i];

            if ($brutto >= $lastValue['brutto'] &&
                $brutto < $currentValue['brutto']
            ) {
                return $lastValue['prozent'];
            }
        }

        return -1;
    }

    /**
     * gibt den Prozentwert zu einem Nettobetrag zurück
     *
     * @param float $netto Netto
     *
     * @return float Prozentwert
     */
    public function getProzentValueByNetto(float $netto): float
    {
        if ($netto < $this->mapping[0]['netto']) {
            return $this->mapping[0]['prozent'];
        }

        $testValue = last($this->mapping);
        if ($netto >= $testValue['netto']) {
            return $testValue['prozent'];
        }

        for ($i = 1, $iMax = count($this->mapping); $i < $iMax; $i++) {
            $lastValue    = $this->mapping[$i - 1];
            $currentValue = $this->mapping[$i];

            if ($netto >= $lastValue['netto'] &&
                $netto < $currentValue['netto']
            ) {
                return $lastValue['prozent'];
            }
        }

        return -1;
    }

    /**
     * Mapping zwischen Brutto, Netto und Prozentwert
     *
     * @return array
     */
    private function getMapping(): array
    {
        return [
            [
                'brutto'  => 20000,
                'netto'   => 15846,
                'prozent' => 79.23,
            ],
            [
                'brutto'  => 30000,
                'netto'   => 22575,
                'prozent' => 75.25,
            ],
            [
                'brutto'  => 40000,
                'netto'   => 28160,
                'prozent' => 70.40,
            ],
            [
                'brutto'  => 50000,
                'netto'   => 33595,
                'prozent' => 67.19,
            ],
            [
                'brutto'  => 60000,
                'netto'   => 39384,
                'prozent' => 65.64,
            ],
            [
                'brutto'  => 70000,
                'netto'   => 45101,
                'prozent' => 64.43,
            ],
            [
                'brutto'  => 80000,
                'netto'   => 50920,
                'prozent' => 63.65,
            ],
            [
                'brutto'  => 90000,
                'netto'   => 57015,
                'prozent' => 63.35,
            ],
            [
                'brutto'  => 100000,
                'netto'   => 62860,
                'prozent' => 62.86,
            ],
        ];
    }
}