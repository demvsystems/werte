<?php

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Arbeitnehmer
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Arbeitnehmer extends BeruflicheBeziehung
{
    const ID = 5;

    public function __construct()
    {
        parent::__construct(self::ID, 'Arbeitnehmer');
    }
}