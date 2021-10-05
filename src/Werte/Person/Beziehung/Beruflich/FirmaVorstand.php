<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class FirmaVorstand
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class FirmaVorstand extends BeruflicheBeziehung
{
    const ID = 45;

    /**
     * FirmaVorstand constructor.
     */
    public function __construct()
    {
        parent::__construct(
            self::ID,
            'Firma hat Vorstand',
            '<b>{kunde1}</b> hat den <i>Vorstand</i> <b>{kunde2}</b>'
        );
    }
}
