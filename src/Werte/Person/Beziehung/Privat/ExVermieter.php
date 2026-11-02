<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Privat;

final class ExVermieter extends PrivateBeziehung
{
    public const ID = 68;

    public function __construct()
    {
        parent::__construct(self::ID, 'Ex-Vermieter');
    }
}
