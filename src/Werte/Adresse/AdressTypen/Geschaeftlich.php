<?php

namespace Demv\Werte\Adresse\AdressTypen;

use Demv\Werte\Adresse\AdressTypInterface;
use Demv\Werte\Value;

/**
 * Class Geschaeftlich
 * @package Demv\Werte\Adresse\AdressTypen
 */
final class Geschaeftlich extends Value implements AdressTypInterface
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'Geschäftlich');
    }
}