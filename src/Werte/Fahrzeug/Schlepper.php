<?php

namespace Demv\Werte\Fahrzeug;

/**
 * Class Schlepper
 * @package Demv\Werte\Fahrzeug
 */
final class Schlepper extends FahrzeugTyp implements FahrzeugTypInterface
{
    const ID = 13;

    public function __construct()
    {
        parent::__construct(self::ID, 'Schlepper/Zugmaschine');
        $this->mehrzahl = 'Schlepper/Zugmaschinen';
    }
}
