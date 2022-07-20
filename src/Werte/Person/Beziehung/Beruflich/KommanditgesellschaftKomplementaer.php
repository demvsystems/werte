<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class KommanditgesellschaftKomplementaer
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class KommanditgesellschaftKomplementaer extends BeruflicheBeziehung
{
    const ID = 50;

    /**
     * KommanditgesellschaftKomplementaer constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Kommanditgesellschaft (Komplementär)');
    }
}
