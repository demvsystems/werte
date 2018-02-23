<?php

namespace Demv\Werte\Person\Familienstand\Familienstaende;

use Demv\Werte\Person\Familienstand\FamilienstandInterface;
use Demv\Werte\Value;

/**
 * Class Geschieden
 * @package Demv\Werte\Person\Familienstand\Familienstaende
 */
class Geschieden extends Value implements FamilienstandInterface
{
    const ID = 4;

    public function __construct()
    {
        parent::__construct(self::ID, 'Geschieden');
    }
}
