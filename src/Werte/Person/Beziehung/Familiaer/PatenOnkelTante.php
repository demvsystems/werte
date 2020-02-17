<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Familiaer;

class PatenOnkelTante extends FamiliaereBeziehung
{
    const ID = 29;

    /**
     * Patenelter constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'PatenOnkelTante');
    }
}
