<?php

namespace Demv\Werte\Person\Beziehung;

use Demv\Werte\ValueInterface;

/**
 * Interface BeziehungsTypInterface
 * @package Demv\Werte\Person\Beziehung
 */
interface BeziehungsTypInterface extends ValueInterface
{
    /**
     * Gibt zurück, ob es sich um eine Familiäre Beziehung handelt
     * @return bool
     */
    public function isFamiliaer(): bool;

    /**
     * Gibt zurück, ob es sich um eine Berufliche Beziehung handelt
     * @return bool
     */
    public function isBeruflich(): bool;
}
