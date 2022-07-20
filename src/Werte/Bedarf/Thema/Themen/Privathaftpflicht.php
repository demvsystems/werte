<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;

/**
 * Class Privathaftpflicht
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Privathaftpflicht extends Bedarfsthema
{
    const ID = 10;

    /**
     * Privathaftpflicht constructor.
     */
    public function __construct()
    {
        parent::__construct(
            self::ID,
            'Privathaftpflicht',
            [\Demv\Werte\Sparte\Sparten\Privathaftpflicht::ID],
            'Privat&shy;haft&shy;pflicht'
        );
    }
}
