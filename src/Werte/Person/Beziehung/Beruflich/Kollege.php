<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

final class Kollege extends BeruflicheBeziehung
{
    public const ID = 65;

    public function __construct()
    {
        parent::__construct(self::ID, 'Kollege/Kollegin');
    }
}
