<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\PrivateSachversicherung;

/**
 * Class Jagdhaftpflicht
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Jagdhaftpflicht extends Bedarfsthema
{
    const ID = 23;

    public function __construct()
    {
        parent::__construct(self::ID, 'Jagdhaftpflicht', [PrivateSachversicherung::JAGDHAFTPFLICHT]);
    }
}
