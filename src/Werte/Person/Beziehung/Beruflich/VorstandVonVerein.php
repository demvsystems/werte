<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class VorstandVonVerein
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class VorstandVonVerein extends BeruflicheBeziehung
{
    const ID = 34;

    /**
     * VorstandVonVerein constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Vorstands (Verein)');
    }
}
