<?php

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class Stiefkind
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
class Stiefelternteil extends FamiliaereBeziehung
{
    const ID = 28;

    /**
     * ExPartner constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Stiefelternteil');
    }
}
