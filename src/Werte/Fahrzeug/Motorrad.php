<?php

namespace Demv\Werte\Fahrzeug;

/**
 * Class Motorrad
 * @package Demv\Werte\Fahrzeug
 */
final class Motorrad extends FahrzeugTyp implements FahrzeugTypInterface
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'Motorrad');
        $this->mehrzahl = 'Motorräder';
    }
}