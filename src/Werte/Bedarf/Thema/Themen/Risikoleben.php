<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Vorsorge;

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
            [Vorsorge::RISIKOLEBEN],
            'Risikolebens&shy;versicherung'
        );
    }
}
