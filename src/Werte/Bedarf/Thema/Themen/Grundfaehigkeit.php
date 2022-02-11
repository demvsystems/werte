<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Vorsorge;

/**
 * Class Grundfaehigkeit
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Grundfaehigkeit extends Bedarfsthema
{
    const ID = 22;

    public function __construct()
    {
        parent::__construct(self::ID, 'Grundfähigkeit', [Vorsorge::GRUNDFAEHIGKEITSVERSICHERUNG]);
    }
}
