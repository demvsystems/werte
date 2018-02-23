<?php

namespace Demv\Werte\Person\Familienstand\Familienstaende;

use Demv\Werte\Person\Familienstand\FamilienstandInterface;
use Demv\Werte\Value;

/**
 * Class Verwitwet
 * @package Demv\Werte\Person\Familienstand\Familienstaende
 */
class Verwitwet extends Value implements FamilienstandInterface
{
    const ID = 5;

    public function __construct()
    {
        parent::__construct(self::ID, 'Verwitwet');
    }
}
