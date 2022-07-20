<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Familiaer;

/**
 * Class Schwiegereltern
 * @package Demv\Werte\Person\Beziehung\Familiaer
 */
final class Schwiegereltern extends FamiliaereBeziehung
{
    const ID = 16;

    /**
     * Schwiegereltern constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Schwiegerelternteil');
    }
}
