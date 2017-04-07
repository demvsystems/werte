<?php

namespace Demv\Werte\Fahrzeug;

use Demv\Werte\Value;

/**
 * Class Ebike
 * @package Demv\Werte\Fahrzeug
 */
final class Ebike extends Value implements FahrzeugTypInterface
{
    const ID = 9;

    public function __construct()
    {
        parent::__construct(self::ID, 'E-Bike');
    }
}