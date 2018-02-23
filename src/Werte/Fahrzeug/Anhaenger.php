<?php

namespace Demv\Werte\Fahrzeug;

/**
 * Class Anhaenger
 * @package Demv\Werte\Fahrzeug
 */
final class Anhaenger extends FahrzeugTyp implements FahrzeugTypInterface
{
    const ID = 4;

    public function __construct()
    {
        parent::__construct(self::ID, 'Anhänger');
    }
}
