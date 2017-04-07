<?php

namespace Demv\Werte\Fahrzeug;

use Demv\Werte\Value;

/**
 * Class Wohnmobil
 * @package Demv\Werte\Fahrzeug
 */
final class Wohnmobil extends Value implements FahrzeugTypInterface
{
    const ID = 8;

    public function __construct()
    {
        parent::__construct(self::ID, 'Wohnmobil');
    }
}