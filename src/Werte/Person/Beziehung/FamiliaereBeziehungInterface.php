<?php

namespace Demv\Werte\Person\Beziehung;

/**
 * Interface FamiliaereBeziehungInterface
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
interface FamiliaereBeziehungInterface
{
    /**
     * @return bool
     */
    public function isZusammenlebend(): bool;

    /**
     * @param bool $zusammenlebend
     */
    public function setZusammenlebend(bool $zusammenlebend);
}