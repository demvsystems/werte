<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class FirmaVon
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class FirmaVon extends BeruflicheBeziehung
{
    const ID = 7;

    public function __construct()
    {
        parent::__construct(self::ID, 'Firma von', '<i>Geschäftsführer von Firma</i> <b>{kunde1}</b> ist <b>{kunde2}</b>');
    }
}
