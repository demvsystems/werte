<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class CousinCousine
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class CousinCousine extends FamiliaereBeziehung
{
    const ID = 48;

    /**
     * CousinCousine constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Cousin/Cousine');
    }
}
