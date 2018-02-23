<?php

namespace Demv\Werte\Fahrzeug;

/**
 * Class Wohnmobil
 * @package Demv\Werte\Fahrzeug
 */
final class Wohnmobil extends FahrzeugTyp implements FahrzeugTypInterface
{
    const ID = 8;

    public function __construct()
    {
        parent::__construct(self::ID, 'Wohnmobil');
        $this->mehrzahl = 'Wohnmobile';
    }
}
