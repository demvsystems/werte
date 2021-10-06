<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class Geschwister
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class Geschwister extends FamiliaereBeziehung
{
    const ID = 8;

    public function __construct()
    {
        parent::__construct(self::ID, 'Bruder/Schwester');
    }
}
