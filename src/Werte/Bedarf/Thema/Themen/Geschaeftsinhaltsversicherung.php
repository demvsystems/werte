<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Gewerbe;

/**
 * Class Geschaeftsinhaltsversicherung
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Geschaeftsinhaltsversicherung extends Bedarfsthema
{
    const ID = 30;

    public function __construct()
    {
        parent::__construct(
            self::ID,
            'Geschäftsinhaltsversicherung',
            [Gewerbe::GESCHAEFTSINHALT],
            'Geschäftsinhalts&shy;versicherung'
        );
    }
}
