<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Privat;

final class ExMieter extends PrivateBeziehung
{
    public const ID = 69;

    public function __construct()
    {
        parent::__construct(self::ID, 'Ex-Mieter');
    }
}
