<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Privat;

use Demv\Werte\Person\Beziehung\Beziehung;

/**
 * Class PrivateBeziehung
 * @package Demv\Werte\Person\Beziehung\Privat
 */
abstract class PrivateBeziehung extends Beziehung
{
    /**
     * @return bool
     */
    public function isFamiliaer(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isBeruflich(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isPrivat(): bool
    {
        return true;
    }
}
