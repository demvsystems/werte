<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

final class SteuerberaterMandant extends BeruflicheBeziehung
{
    const ID = 58;

    public function __construct()
    {
        parent::__construct(self::ID, 'Mandant');
    }
}
