<?php

namespace Demv\Werte\Fahrzeug;

use Demv\Werte\Value;

/**
 * Class Quad
 * @package Demv\Werte\Fahrzeug
 */
final class Quad extends Value implements FahrzeugTypInterface
{
    const ID = 5;

    public function __construct()
    {
        parent::__construct(self::ID, 'Quad');
    }
}