<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class Schwager
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class Schwager extends FamiliaereBeziehung
{
    const ID = 9;

    public function __construct()
    {
        parent::__construct(self::ID, 'Schwager/Schwägerin');
    }
}
