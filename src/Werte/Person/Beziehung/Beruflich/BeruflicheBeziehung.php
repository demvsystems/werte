<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

use Demv\Werte\Person\Beziehung\Beziehung;

/**
 * Class BeruflicheBeziehung
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
class BeruflicheBeziehung extends Beziehung
{
    /**
     * @return bool
     */
    final public function isFamiliaer(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    final public function isBeruflich(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isPrivat(): bool
    {
        return false;
    }
}
