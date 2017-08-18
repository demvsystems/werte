<?php

namespace Demv\Werte\Person\Beziehung\Privat;

use Demv\Werte\Person\Beziehung\BeziehungsTypInterface;
use Demv\Werte\Value;

/**
 * Class PrivateBeziehung
 * @package Demv\Werte\Person\Beziehung\Privat
 */
class PrivateBeziehung extends Value implements BeziehungsTypInterface
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