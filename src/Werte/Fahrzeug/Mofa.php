<?php

namespace Demv\Werte\Fahrzeug;

/**
 * Class Mofa
 * @package Demv\Werte\Fahrzeug
 */
final class Mofa extends FahrzeugTyp implements FahrzeugTypInterface
{
    const ID = 3;

    public function __construct()
    {
        parent::__construct(self::ID, 'Mofa/Moped');
        $this->mehrzahl = 'Mofas/Mopeds';
    }
}
