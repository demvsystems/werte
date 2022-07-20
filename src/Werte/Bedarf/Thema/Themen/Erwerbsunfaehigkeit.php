<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Vorsorge;

/**
 * Class Erwerbsunfaehigkeit
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Erwerbsunfaehigkeit extends Bedarfsthema
{
    const ID = 26;

    public function __construct()
    {
        parent::__construct(self::ID, 'Erwerbsunfähigkeit', [Vorsorge::ERWERBSUNFAEHIGKEITSVERSICHERUNG]);
    }
}
