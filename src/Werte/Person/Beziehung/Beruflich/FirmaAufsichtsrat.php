<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class FirmaAufsichtsrat
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class FirmaAufsichtsrat extends BeruflicheBeziehung
{
    const ID = 47;

    /**
     * FirmaAufsichtsrat constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Firma hat Aufsichtsrat');
    }
}
