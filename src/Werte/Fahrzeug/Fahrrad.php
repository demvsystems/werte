<?php

namespace Demv\Werte\Fahrzeug;

use Demv\Werte\Value;

/**
 * Class Fahrrad
 * @package Demv\Werte\Fahrzeug
 */
final class Fahrrad extends Value implements FahrzeugTypInterface
{
    const ID = 10;

    public function __construct()
    {
        parent::__construct(self::ID, 'Fahrrad');
    }
}