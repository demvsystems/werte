<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\RechtsschutzPrivat;

/**
 * Class Rechtsschutz
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Rechtsschutz extends Bedarfsthema
{
    const ID = 13;

    /**
     * Rechtsschutz constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Rechtsschutz', [
            RechtsschutzPrivat::ID,
            RechtsschutzPrivat::VERMIETER,
            RechtsschutzPrivat::MIETER_EIGENTUEMER,
            RechtsschutzPrivat::BERUF,
            RechtsschutzPrivat::VERKEHR,
            RechtsschutzPrivat::PRIVAT,
        ]);
    }
}
