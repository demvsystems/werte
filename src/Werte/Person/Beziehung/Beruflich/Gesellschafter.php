<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Gesellschafter
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Gesellschafter extends BeruflicheBeziehung
{
    const ID = 39;

    public function __construct()
    {
        parent::__construct(self::ID, 'Gesellschafter');
    }
}
