<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

final class NotarMandant extends BeruflicheBeziehung
{
    const ID = 60;

    public function __construct()
    {
        parent::__construct(self::ID, 'Mandant');
    }
}
