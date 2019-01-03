<?php

namespace Demv\Werte\Fahrzeug;

/**
 * Class Auto
 * @package Demv\Werte\Fahrzeug
 */
final class Pkw extends FahrzeugTyp implements FahrzeugTypInterface
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Pkw');
        $this->mehrzahl = 'Pkws';
    }
}
