<?php

namespace Demv\Werte\Fahrzeug;

/**
 * Class Oldtimer
 * @package Demv\Werte\Fahrzeug
 */
final class Oldtimer extends FahrzeugTyp implements FahrzeugTypInterface
{
    const ID = 7;

    public function __construct()
    {
        parent::__construct(self::ID, 'Oldtimer');
    }
}
