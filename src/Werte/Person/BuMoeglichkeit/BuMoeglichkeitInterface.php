<?php

namespace Demv\Werte\Person\BuMoeglichkeit;

use Demv\Werte\ValueInterface;

/**
 * Interface BuMoeglichkeitInterface
 * @package Demv\Werte\Person\BuMoeglichkeit
 */
interface BuMoeglichkeitInterface extends ValueInterface
{
    /**
     * Gibt zurück, ob eine Berufsunfähigkeitsversicherung zum aktuellen Zeitpunkt möglich ist
     * @return bool
     */
    public function isBuAktuellMoeglich(): bool;
}