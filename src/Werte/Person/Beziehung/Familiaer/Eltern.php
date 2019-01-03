<?php

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class Eltern
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class Eltern extends FamiliaereBeziehung
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'Elternteil');
    }
}
