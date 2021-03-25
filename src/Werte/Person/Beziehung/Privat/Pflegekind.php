<?php

namespace Demv\Werte\Person\Beziehung\Privat;

/**
 * Class Pflegekind
 */
final class Pflegekind extends PrivateBeziehung
{
    const ID = 37;

    public function __construct()
    {
        parent::__construct(self::ID, 'Pflegekind');
    }
}
