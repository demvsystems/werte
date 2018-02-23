<?php

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class ExArbeitnehmer
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class ExArbeitnehmer extends BeruflicheBeziehung
{
    const ID = 23;

    public function __construct()
    {
        parent::__construct(self::ID, 'Ex-Arbeitnehmer');
    }
}