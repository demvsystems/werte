<?php

namespace Demv\Werte\Adresse\AdressTypen;

use Demv\Werte\Adresse\AdressTypInterface;
use Demv\Werte\Value;

/**
 * Class Privat
 * @package Demv\Werte\Adresse\AdressTypen
 */
final class Privat extends Value implements AdressTypInterface
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Privat');
    }
}
