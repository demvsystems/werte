<?php

namespace Demv\Werte\Person\Familienstand\Familienstaende;

use Demv\Werte\Person\Familienstand\FamilienstandInterface;
use Demv\Werte\Value;

/**
 * Class EingetrageneLebenspartnerschaft
 * @package Demv\Werte\Person\Familienstand\Familienstaende
 */
class EingetrageneLebenspartnerschaft extends Value implements FamilienstandInterface
{
    const ID = 7;

    public function __construct()
    {
        parent::__construct(self::ID, 'Eingetragene Lebenspartnerschaft');
    }
}
