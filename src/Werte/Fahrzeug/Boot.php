<?php

namespace Demv\Werte\Fahrzeug;

use Demv\Werte\Value;

/**
 * Class Boot
 * @package Demv\Werte\Fahrzeug
 */
final class Boot extends Value implements FahrzeugTypInterface
{
    const ID = 12;

    public function __construct()
    {
        parent::__construct(self::ID, 'Boot');
    }
}