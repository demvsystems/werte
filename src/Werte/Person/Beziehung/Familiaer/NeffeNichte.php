<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class NeffeNichte
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class NeffeNichte extends FamiliaereBeziehung
{
    const ID = 15;

    public function __construct()
    {
        parent::__construct(self::ID, 'Neffe/Nichte');
    }
}
