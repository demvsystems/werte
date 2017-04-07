<?php

namespace Demv\Werte\Fahrzeug;

use Demv\Werte\Value;

/**
 * Class Lkw
 * @package Demv\Werte\Fahrzeug
 */
final class Lkw extends Value implements FahrzeugTypInterface
{
    const ID = 6;

    public function __construct()
    {
        parent::__construct(self::ID, 'LKW');
    }
}