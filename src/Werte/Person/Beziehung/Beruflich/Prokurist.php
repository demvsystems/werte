<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

final class Prokurist extends BeruflicheBeziehung
{
    public const ID = 70;

    public function __construct()
    {
        parent::__construct(self::ID, 'Prokurist');
    }
}
