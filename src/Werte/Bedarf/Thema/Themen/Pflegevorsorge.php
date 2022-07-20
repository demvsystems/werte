<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Krankenzusatzversicherung;
use Demv\Werte\Sparte\Sparten\Vorsorge;

/**
 * Class Pflegevorsorge
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Pflegevorsorge extends Bedarfsthema
{
    const ID = 9;

    /**
     * Pflegevorsorge constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Pflegevorsorge', [
            Vorsorge::PFLEGEVERSICHERUNG,
            Krankenzusatzversicherung::PFLEGETAGEGELD,
            Krankenzusatzversicherung::PFLEGEKOSTENVERSICHERUNG,
        ], 'Pflege&shy;vorsorge');
    }
}
