<?php

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class Stiefkind
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
class Stiefkind extends FamiliaereBeziehung
{
    const ID = 27;

    /**
     * ExPartner constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Stiefkind');
    }
}
