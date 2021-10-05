<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Kommanditist
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Kommanditist extends BeruflicheBeziehung
{
    const ID = 51;

    /**
     * Kommanditist constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Kommanditist');
    }
}
