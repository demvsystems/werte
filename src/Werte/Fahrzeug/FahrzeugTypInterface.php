<?php

namespace Demv\Werte\Fahrzeug;

use Demv\Werte\ValueInterface;

/**
 * Interface FahrzeugTypInterface
 * @package Demv\Werte\Fahrzeug
 */
interface FahrzeugTypInterface extends ValueInterface
{
    /**
     * Gibt den Namen für die Mehrzahl zurück
     *
     * @return string
     */
    public function getMehrzahl(): string;
}
