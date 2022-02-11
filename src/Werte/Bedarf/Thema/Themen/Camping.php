<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\PrivateSachversicherung;

/**
 * Class Camping
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Camping extends Bedarfsthema
{
    const ID = 20;

    public function __construct()
    {
        parent::__construct(self::ID, 'Campingversicherung', [PrivateSachversicherung::CAMPINGVERSICHERUNG]);
    }
}
