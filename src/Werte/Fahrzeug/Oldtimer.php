<?php

namespace Demv\Werte\Fahrzeug;

use Demv\Werte\Value;

/**
 * Class Oldtimer
 * @package Demv\Werte\Fahrzeug
 */
final class Oldtimer extends Value implements FahrzeugTypInterface
{
    const ID = 7;

    public function __construct()
    {
        parent::__construct(self::ID, 'Oldtimer');
    }
}