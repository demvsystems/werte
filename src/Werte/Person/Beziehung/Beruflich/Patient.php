<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

final class Patient extends BeruflicheBeziehung
{
    const ID = 62;

    public function __construct()
    {
        parent::__construct(self::ID, 'Patient');
    }
}
