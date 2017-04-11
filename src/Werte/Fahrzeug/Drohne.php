<?php

namespace Demv\Werte\Fahrzeug;

/**
 * Class Drohne
 * @package Demv\Werte\Fahrzeug
 */
final class Drohne extends FahrzeugTyp implements FahrzeugTypInterface
{
    const ID = 11;

    public function __construct()
    {
        parent::__construct(self::ID, 'Drohne');
        $this->mehrzahl = 'Drohnen';
    }
}