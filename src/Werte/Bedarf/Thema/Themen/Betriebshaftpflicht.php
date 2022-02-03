<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Gewerbe;

/**
 * Class Betriebshaftpflicht
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
final class Betriebshaftpflicht extends Bedarfsthema
{
    const ID = 32;

    public function __construct()
    {
        parent::__construct(self::ID, 'Betriebshaftpflicht', [Gewerbe::BETRIEBSHAFTPFLICHT]);
    }
}
