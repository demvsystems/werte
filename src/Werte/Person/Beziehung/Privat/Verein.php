<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Privat;

/**
 * Class Verein
 * @package Demv\Werte\Person\Beziehung\Privat
 */
final class Verein extends PrivateBeziehung
{
    const ID = 35;

    /**
     * Verein constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Verein');
    }
}
