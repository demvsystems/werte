<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Krankenversicherung;

/**
 * Class Krankentagegeld
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
final class Krankentagegeld extends Bedarfsthema
{
    const ID = 5;

    /**
     * Krankentagegeld constructor.
     */
    public function __construct()
    {
        parent::__construct(
            self::ID,
            'Krankentagegeld',
            [Krankenversicherung::KRANKENTAGEGELD],
            'Kranken&shy;tagegeld'
        );
    }
}
