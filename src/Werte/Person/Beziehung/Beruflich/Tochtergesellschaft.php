<?php

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Tochtergesellschaft
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Tochtergesellschaft extends BeruflicheBeziehung
{
    const ID = 43;

    public function __construct()
    {
        parent::__construct(self::ID, 'Tochtergesellschaft');
    }
}
