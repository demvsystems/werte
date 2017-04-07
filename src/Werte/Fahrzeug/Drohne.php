<?php

namespace Demv\Werte\Fahrzeug;

use Demv\Werte\Value;

/**
 * Class Drohne
 * @package Demv\Werte\Fahrzeug
 */
final class Drohne extends Value implements FahrzeugTypInterface
{
    const ID = 11;

    public function __construct()
    {
        parent::__construct(self::ID, 'Drohne');
    }
}