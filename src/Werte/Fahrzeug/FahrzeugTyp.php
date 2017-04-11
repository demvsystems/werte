<?php

namespace Demv\Werte\Fahrzeug;

use Demv\Werte\Value;

/**
 * Class FahrzeugTyp
 * @package Demv\Werte\Fahrzeug
 */
abstract class FahrzeugTyp extends Value
{
    /**
     * @var string
     */
    protected $mehrzahl;

    /**
     * @return string
     */
    public function getMehrzahl(): string
    {
        return $this->mehrzahl !== null ? $this->mehrzahl : $this->name;
    }
}