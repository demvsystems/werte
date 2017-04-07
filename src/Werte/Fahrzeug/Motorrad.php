<?php

namespace Demv\Werte\Fahrzeug;

use Demv\Werte\Value;

/**
 * Class Motorrad
 * @package Demv\Werte\Fahrzeug
 */
final class Motorrad extends Value implements FahrzeugTypInterface
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'Motorrad');
    }
}