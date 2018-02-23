<?php

namespace Demv\Werte\Person\Beziehung\Privat;

/**
 * Class FreundBekannter
 */
final class FreundBekannter extends PrivateBeziehung
{
    const ID = 18;

    /**
     * FreundBekannter constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Freund/Bekannter');
    }
}
