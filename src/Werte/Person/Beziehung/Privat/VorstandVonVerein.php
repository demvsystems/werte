<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Privat;

/**
 * Class VorstandVonVerein
 * @package Demv\Werte\Person\Beziehung\Privat
 */
final class VorstandVonVerein extends PrivateBeziehung
{
    const ID = 34;

    /**
     * VorstandVonVerein constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Teil des Vorstands (Verein)');
    }
}
