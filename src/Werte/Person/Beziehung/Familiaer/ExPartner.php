<?php

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class ExPartner
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class ExPartner extends FamiliaereBeziehung
{
    const ID = 19;

    /**
     * ExPartner constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Ex-Partner');
    }
}