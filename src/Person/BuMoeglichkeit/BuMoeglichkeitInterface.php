<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19.01.17
 * Time: 14:58
 */
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