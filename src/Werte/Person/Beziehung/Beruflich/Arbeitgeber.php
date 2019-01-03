<?php

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Arbeitgeber
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Arbeitgeber extends BeruflicheBeziehung
{
    const ID = 4;

    public function __construct()
    {
        parent::__construct(self::ID, 'Arbeitgeber');
    }
}
