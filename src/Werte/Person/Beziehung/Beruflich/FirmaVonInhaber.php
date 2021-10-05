<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class FirmaVonInhaber
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class FirmaVonInhaber extends BeruflicheBeziehung
{
    const ID = 13;

    public function __construct()
    {
        parent::__construct(self::ID, 'Firma von (Inhaber)', '<i>Inhaber von Firma</i> <b>{kunde1}</b> ist <b>{kunde2}</b>');
    }
}
