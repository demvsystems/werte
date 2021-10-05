<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Familiaer;

use Demv\Werte\Person\Beziehung\Beziehung;

/**
 * Class FamiliaereBeziehung
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
class FamiliaereBeziehung extends Beziehung
{
    /**
     * @return bool
     */
    final public function isFamiliaer(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    final public function isBeruflich(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isPrivat(): bool
    {
        return false;
    }
}
