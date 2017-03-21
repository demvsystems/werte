<?php

namespace Demv\Werte\Person\Familienstand\Familienstaende;

use Demv\Werte\Person\Familienstand\FamilienstandInterface;
use Demv\Werte\Value;

/**
 * Class Lebensgemeinschaft
 * @package Demv\Werte\Person\Familienstand\Familienstaende
 */
class Lebensgemeinschaft extends Value implements FamilienstandInterface
{
    const ID = 8;

    public function __construct()
    {
        parent::__construct(self::ID, 'Lebensgemeinschaft');
    }
}