<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Familiaer;

class Patenkind extends FamiliaereBeziehung
{
    const ID = 30;

    /**
     * Patenkind constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Patenkind');
    }
}
