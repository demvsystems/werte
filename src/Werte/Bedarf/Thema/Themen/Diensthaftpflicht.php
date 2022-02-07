<?php

declare(strict_types=1);

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Privathaftpflicht;

class Diensthaftpflicht extends Bedarfsthema
{
    const ID = 38;

    public function __construct()
    {
        parent::__construct(
            self::ID,
            'Diensthaftpflicht',
            [Privathaftpflicht::DIENSTHAFTPFLICHT],
            'Dienst&shy;haftpflicht'
        );
    }
}
