<?php

namespace Demv\Werte\Fahrzeug;

/**
 * Class Boot
 * @package Demv\Werte\Fahrzeug
 */
final class Boot extends FahrzeugTyp implements FahrzeugTypInterface
{
    const ID = 12;

    public function __construct()
    {
        parent::__construct(self::ID, 'Boot');
        $this->mehrzahl = 'Boote';
    }
}
