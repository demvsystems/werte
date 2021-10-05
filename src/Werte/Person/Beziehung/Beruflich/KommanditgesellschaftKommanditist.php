<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class KommanditgesellschaftKommanditist
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class KommanditgesellschaftKommanditist extends BeruflicheBeziehung
{
    const ID = 52;

    /**
     * KommanditgesellschaftKommanditist constructor.
     */
    public function __construct()
    {
        parent::__construct(
            self::ID,
            'Kommanditgesellschaft (Kommanditist)',
            'Kommanditgesellschaft <b>{kunde1}</b> hat als <i>Kommanditist</i> <b>{kunde2}</b>'
        );
    }
}
