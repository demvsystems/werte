<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class Partner
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class Partner extends FamiliaereBeziehung
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Partner');
    }
}
