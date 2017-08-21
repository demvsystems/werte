<?php

namespace Demv\Werte\Adresse;

use Demv\Werte\ValueInterface;

/**
 * Interface AdressTypInterface
 * @package Demv\Werte\Adresse
 */
interface AdressTypInterface extends ValueInterface
{
    /**
     * Gibt die Mehrzahlbezeichnung zurück
     *
     * @return string
     */
    public function getMehrzahl(): string;
}