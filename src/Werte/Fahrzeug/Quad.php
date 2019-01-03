<?php

namespace Demv\Werte\Fahrzeug;

/**
 * Class Quad
 * @package Demv\Werte\Fahrzeug
 */
final class Quad extends FahrzeugTyp implements FahrzeugTypInterface
{
    const ID = 5;

    public function __construct()
    {
        parent::__construct(self::ID, 'Quad');
        $this->mehrzahl = 'Quads';
    }
}
