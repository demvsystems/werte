<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\PrivateKrankenzusatzversicherung;

/**
 * Class AmbulanteKrankenzusatzversicherung
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
final class AmbulanteKrankenzusatzversicherung extends Bedarfsthema
{
    const ID = 15;

    /**
     * AmbulanteKrankenzusatzversicherung constructor.
     */
    public function __construct()
    {
        parent::__construct(
            self::ID,
            'Ambulante Krankenzusatzversicherung',
            [PrivateKrankenzusatzversicherung::AMBULANT],
            'Ambulante Kranken&shy;zusatz&shy;versicherung'
        );
    }
}
