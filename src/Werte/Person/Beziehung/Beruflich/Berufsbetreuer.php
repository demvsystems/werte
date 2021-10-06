<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Berufsbetreuer
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Berufsbetreuer extends BeruflicheBeziehung
{
    public const ID = 33;

    public function __construct()
    {
        parent::__construct(self::ID, 'Berufsbetreuer');
    }
}
