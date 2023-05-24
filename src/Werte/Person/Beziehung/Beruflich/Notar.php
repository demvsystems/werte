<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

final class Notar extends BeruflicheBeziehung
{
    const ID = 59;

    public function __construct()
    {
        parent::__construct(self::ID, 'Notar');
    }
}
