<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Gewerbe;

/**
 * Class Vermoegensschadenhaftpflicht
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Vermoegensschadenhaftpflicht extends Bedarfsthema
{
    const ID = 31;

    public function __construct()
    {
        parent::__construct(
            self::ID,
            'Vermögensschadenhaftpflicht',
            [Gewerbe::VERMOEGENSCHADENHAFTPFLICHT],
            'Vermögensschaden&shy;haftpflicht'
        );
    }
}
