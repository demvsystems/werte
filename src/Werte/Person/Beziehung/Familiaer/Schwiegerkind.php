<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class Schwiegerkind
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class Schwiegerkind extends FamiliaereBeziehung
{
    const ID = 17;

    /**
     * Schwiegerkind constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Schwiegerkind');
    }
}
