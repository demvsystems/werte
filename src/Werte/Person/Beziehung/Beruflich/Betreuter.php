<?php

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Betreuter
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Betreuter extends BeruflicheBeziehung
{
    public const ID = 32;

    public function __construct()
    {
        parent::__construct(self::ID, 'Betreuter');
    }
}
