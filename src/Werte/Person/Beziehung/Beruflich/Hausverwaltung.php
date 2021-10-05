<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Hausverwaltung
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Hausverwaltung extends BeruflicheBeziehung
{
    const ID = 40;

    public function __construct()
    {
        parent::__construct(self::ID, 'Hausverwaltung');
    }
}
