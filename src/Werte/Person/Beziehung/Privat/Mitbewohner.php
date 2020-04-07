<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Privat;

class Mitbewohner extends PrivateBeziehung
{
    const ID = 31;

    /**
     * Mitbewohner constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Mitbewohner/Mitbewohnerin');
    }
}
