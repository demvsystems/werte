<?php

namespace Demv\Werte\Fahrzeug;

use Demv\Werte\Value;

/**
 * Class Auto
 * @package Demv\Werte\Fahrzeug
 */
final class Pkw extends Value implements FahrzeugTypInterface
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Pkw');
    }
}