<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Privat;

/**
 * Class FreundBekannter
 */
final class Generalbevollmaechtigter extends PrivateBeziehung
{
    const ID = 55;

    /**
     * FreundBekannter constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Generalbevollmächtigter');
    }
}
