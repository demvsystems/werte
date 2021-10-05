<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Aufsichtsrat
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Aufsichtsrat extends BeruflicheBeziehung
{
    const ID = 46;

    /**
     * Aufsichtsrat constructor.
     */
    public function __construct()
    {
        parent::__construct(
            self::ID,
            'Aufsichtsrat',
            '<b>{kunde1}</b> ist <i>Aufsichtsrat</i> von <b>{kunde2}</b>'
        );
    }
}
