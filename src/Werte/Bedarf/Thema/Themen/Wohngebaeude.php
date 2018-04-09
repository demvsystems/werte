<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\PrivateSachversicherung;

/**
 * Class Wohngebaeude
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
final class Wohngebaeude extends Bedarfsthema
{
    const ID = 12;

    /**
     * Wohngebaeude constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Wohngebäude', [PrivateSachversicherung::WOHNGEBAUEDEVERSICHERUNG]);
    }
}
