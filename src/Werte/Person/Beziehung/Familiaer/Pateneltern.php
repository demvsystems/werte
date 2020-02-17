<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Familiaer;

class Pateneltern extends FamiliaereBeziehung
{
    const ID = 29;

    /**
     * Patenelter constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Pateneltern');
    }
}
