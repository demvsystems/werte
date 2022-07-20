<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\PrivateSachversicherung;

/**
 * Class Photovoltaik
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Photovoltaik extends Bedarfsthema
{
    const ID = 19;

    public function __construct()
    {
        parent::__construct(self::ID, 'Photovoltaikversicherung', [PrivateSachversicherung::BETREIBERHAFTPFLICHT]);
    }
}
