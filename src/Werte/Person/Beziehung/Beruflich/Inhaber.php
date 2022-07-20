<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Inhaber
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Inhaber extends BeruflicheBeziehung
{
    const ID = 12;

    public function __construct()
    {
        parent::__construct(self::ID, 'Inhaber');
    }
}
