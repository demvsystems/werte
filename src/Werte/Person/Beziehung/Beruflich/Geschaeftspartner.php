<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Geschaeftspartnerextends
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Geschaeftspartner extends BeruflicheBeziehung
{
    const ID = 24;

    public function __construct()
    {
        parent::__construct(self::ID, 'Geschäftspartner');
    }
}
