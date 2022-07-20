<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class Enkel
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class Enkel extends FamiliaereBeziehung
{
    const ID = 11;

    public function __construct()
    {
        parent::__construct(self::ID, 'Enkel/Enkelin');
    }
}
