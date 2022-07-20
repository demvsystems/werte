<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Komplementaer
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Komplementaer extends BeruflicheBeziehung
{
    const ID = 49;

    /**
     * VorstandVonVerein constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Komplementär');
    }
}
