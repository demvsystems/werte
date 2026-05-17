<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\RechtsschutzGewerbe;

/**
 * Class Firmenrechtsschutz
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Firmenrechtsschutz extends Bedarfsthema
{
    const ID = 34;

    public function __construct()
    {
        parent::__construct(self::ID, 'Firmenrechtsschutz', [
            RechtsschutzGewerbe::ID,
            RechtsschutzGewerbe::BERUF,
            RechtsschutzGewerbe::VERKEHR,
            RechtsschutzGewerbe::MIETER_EIGENTUEMER,
            RechtsschutzGewerbe::VERMIETER,
            RechtsschutzGewerbe::FIRMEN,
        ]);
    }
}
