<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Geschaeftsfuehrer
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Geschaeftsfuehrer extends BeruflicheBeziehung
{
    const ID = 6;

    public function __construct()
    {
        parent::__construct(self::ID, 'Geschäftsführer');
    }
}
