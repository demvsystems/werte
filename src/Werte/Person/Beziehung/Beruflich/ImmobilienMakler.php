<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

final class ImmobilienMakler extends BeruflicheBeziehung
{
    const ID = 63;

    public function __construct()
    {
        parent::__construct(self::ID, 'Immobilienmakler');
    }
}
