<?php

namespace Demv\Werte\Fahrzeug;

use Demv\Werte\Value;

/**
 * Class Anhaenger
 * @package Demv\Werte\Fahrzeug
 */
final class Anhaenger extends Value implements FahrzeugTypInterface
{
    const ID = 4;

    public function __construct()
    {
        parent::__construct(self::ID, 'Anhänger');
    }
}