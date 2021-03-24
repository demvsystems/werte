<?php

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Muttergesellschaft
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Muttergesellschaft extends BeruflicheBeziehung
{
    const ID = 42;

    public function __construct()
    {
        parent::__construct(self::ID, 'Muttergesellschaft');
    }
}
