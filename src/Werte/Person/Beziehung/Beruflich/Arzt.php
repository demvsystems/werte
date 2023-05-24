<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

final class Arzt extends BeruflicheBeziehung
{
    const ID = 61;

    public function __construct()
    {
        parent::__construct(self::ID, 'Arzt');
    }
}
