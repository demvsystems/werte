<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\PrivateSachversicherung;

/**
 * Class Luftfahrthaftpflicht
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
final class Luftfahrthaftpflicht extends Bedarfsthema
{
    const ID = 24;

    public function __construct()
    {
        parent::__construct(self::ID, 'Luftfahrthaftpflicht', [PrivateSachversicherung::LUFTFAHRTHAFTPFLICHT]);
    }
}
