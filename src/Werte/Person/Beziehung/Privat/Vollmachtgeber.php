<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Privat;

/**
 * Class FreundBekannter
 */
final class Vollmachtgeber extends PrivateBeziehung
{
    const ID = 56;

    /**
     * FreundBekannter constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Vollmachtgeber');
    }
}
