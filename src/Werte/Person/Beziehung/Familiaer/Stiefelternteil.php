<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class Stiefkind
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class Stiefelternteil extends FamiliaereBeziehung
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
