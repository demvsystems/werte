<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Privat;

final class Mitglied extends PrivateBeziehung
{
    public const ID = 72;

    public function __construct()
    {
        parent::__construct(self::ID, 'Mitglied');
    }
}
