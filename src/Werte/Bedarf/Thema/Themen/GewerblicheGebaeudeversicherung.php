<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Gewerbe;

/**
 * Class GewerblicheGebaeudeversicherung
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class GewerblicheGebaeudeversicherung extends Bedarfsthema
{
    const ID = 35;

    public function __construct()
    {
        parent::__construct(
            self::ID,
            'Gewerbliche Gebäudeversicherung',
            [Gewerbe::GEBAEUDE],
            'Gewerbliche Gebäude&shy;versicherung'
        );
    }
}
