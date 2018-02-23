<?php

namespace Demv\Werte\Fahrzeug;

/**
 * Class Ebike
 * @package Demv\Werte\Fahrzeug
 */
final class Ebike extends FahrzeugTyp implements FahrzeugTypInterface
{
    const ID = 9;

    public function __construct()
    {
        parent::__construct(self::ID, 'E-Bike');
        $this->mehrzahl = 'E-Bikes';
    }
}
