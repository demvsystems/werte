<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

final class FirmaVonProkurist extends BeruflicheBeziehung
{
    public const ID = 71;

    public function __construct()
    {
        parent::__construct(self::ID, 'Firma von (Prokurist)');
    }
}
