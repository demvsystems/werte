<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Privat;

/**
 * Class Pflegeeltern
 */
final class Pflegeeltern extends PrivateBeziehung
{
    const ID = 36;

    public function __construct()
    {
        parent::__construct(self::ID, 'Pflegeelternteil');
    }
}
