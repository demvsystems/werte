<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

final class Steuerberater extends BeruflicheBeziehung
{
    const ID = 57;

    public function __construct()
    {
        parent::__construct(self::ID, 'Steuerberater');
    }
}
