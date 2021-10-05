<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class FirmaVonGesellschafter
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class FirmaVonGesellschafter extends BeruflicheBeziehung
{
    const ID = 38;

    public function __construct()
    {
        parent::__construct(
            self::ID,
            'Firma von Gesellschafter',
            '<b>{kunde2}</b> ist Gesellschafter von <b>{kunde1}</b>'
        );
    }
}
