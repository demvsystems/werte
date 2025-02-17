<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Risikolebensversicherung;

/**
 * Class Risikoleben
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Risikoleben extends Bedarfsthema
{
    const ID = 3;

    /**
     * RisikoLeben constructor.
     */
    public function __construct()
    {
        parent::__construct(
            self::ID,
            'Risikolebensversicherung',
            [
                Risikolebensversicherung::ID,
                Risikolebensversicherung::TODESFALL_LEISTUNG_STEIGEND,
                Risikolebensversicherung::TODESFALL_LEISTUNG_Fallend,
                Risikolebensversicherung::VERBUNDENE_LEBEN,
                Risikolebensversicherung::OHNE_GESUNDHEITSFRAGEN,
                Risikolebensversicherung::TODESFALL_LEISTUNG_KONSTANT,
            ],
            'Risikolebens&shy;versicherung'
        );
    }
}
