<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\PrivateSachversicherung;

/**
 * Class Bauherren
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Bauherren extends Bedarfsthema
{
    const ID = 17;

    public function __construct()
    {
        parent::__construct(self::ID, 'Bauherrenhaftpflicht', [PrivateSachversicherung::BAUHERREN_HAFTPFLICHT]);
    }
}
