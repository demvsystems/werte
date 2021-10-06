<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class Kind
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class Kind extends FamiliaereBeziehung
{
    const ID = 3;

    public function __construct()
    {
        parent::__construct(self::ID, 'Kind');
    }
}
