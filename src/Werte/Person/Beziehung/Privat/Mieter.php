<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Privat;

final class Mieter extends PrivateBeziehung
{
    public const ID = 67;

    public function __construct()
    {
        parent::__construct(self::ID, 'Mieter');
    }
}
