<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class OnkelTante
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class OnkelTante extends FamiliaereBeziehung
{
    const ID = 14;

    public function __construct()
    {
        parent::__construct(self::ID, 'Onkel/Tante');
    }
}
