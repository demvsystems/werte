<?php

namespace Demv\Werte\Tierart;

use Demv\Werte\ValueInterface;

/**
 * Interface TierartInterface
 * @package Demv\Werte\Tierart
 */
interface TierartInterface extends ValueInterface
{
    /**
     * Gibt die Mehrzahlbezeichnung zurück
     *
     * @return string
     */
    public function getMehrzahl(): string;
}
