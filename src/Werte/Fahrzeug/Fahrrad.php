<?php

namespace Demv\Werte\Fahrzeug;

/**
 * Class Fahrrad
 * @package Demv\Werte\Fahrzeug
 */
final class Fahrrad extends FahrzeugTyp implements FahrzeugTypInterface
{
    const ID = 10;

    public function __construct()
    {
        parent::__construct(self::ID, 'Fahrrad');
        $this->mehrzahl = 'Fahrräder';
    }
}