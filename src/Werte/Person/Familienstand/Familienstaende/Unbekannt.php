<?php

namespace Demv\Werte\Person\Familienstand\Familienstaende;

use Demv\Werte\Person\Familienstand\FamilienstandInterface;
use Demv\Werte\Value;

/**
 * Class Unbekannt
 * @package Demv\Werte\Person\Familienstand\Familienstaende
 */
class Unbekannt extends Value implements FamilienstandInterface
{
    const ID = 6;

    public function __construct()
    {
        parent::__construct(self::ID, 'Unbekannt');
    }
}
