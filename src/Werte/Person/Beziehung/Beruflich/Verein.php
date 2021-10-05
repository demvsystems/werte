<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Verein
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Verein extends BeruflicheBeziehung
{
    const ID = 35;

    /**
     * Verein constructor.
     */
    public function __construct()
    {
        parent::__construct(
            self::ID,
            'Verein',
            '<i>Vorstand von Verein</i> <b>{kunde1}</b> ist <b>{kunde2}</b>'
        );
    }
}
