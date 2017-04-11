<?php

namespace Demv\Werte\Fahrzeug;

/**
 * Class Lkw
 * @package Demv\Werte\Fahrzeug
 */
final class Lkw extends FahrzeugTyp implements FahrzeugTypInterface
{
    const ID = 6;

    public function __construct()
    {
        parent::__construct(self::ID, 'LKW');
        $this->mehrzahl = 'Lkws';
    }
}