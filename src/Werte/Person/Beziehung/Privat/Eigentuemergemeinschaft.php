<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Beziehung\Privat;

/**
 * Class Eigentuemergemeischaft
 * @package Demv\Werte\Person\Beziehung\Privat
 */
final class Eigentuemergemeinschaft extends PrivateBeziehung
{
    const ID = 21;

    /**
     * FreundBekannter constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID,'Eigentümergemeinschaft');
    }
}
