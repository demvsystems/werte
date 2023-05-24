<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

final class BautraegerKaeufer extends BeruflicheBeziehung
{
    const ID = 64;

    public function __construct()
    {
        parent::__construct(self::ID, 'Bauträger / Käufer');
    }
}
