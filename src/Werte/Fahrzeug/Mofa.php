<?php

namespace Demv\Werte\Fahrzeug;

use Demv\Werte\Value;

/**
 * Class Mofa
 * @package Demv\Werte\Fahrzeug
 */
final class Mofa extends Value implements FahrzeugTypInterface
{
    const ID = 3;

    public function __construct()
    {
        parent::__construct(self::ID, 'Mofa/Moped');
    }
}