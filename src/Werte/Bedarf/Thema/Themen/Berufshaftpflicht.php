<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Gewerbe;

/**
 * Class Berufshaftpflicht
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Berufshaftpflicht extends Bedarfsthema
{
    const ID = 29;

    public function __construct()
    {
        parent::__construct(self::ID, 'Berufshaftpflicht', [Gewerbe::BERUFSHAFTPFLICHT]);
    }
}
