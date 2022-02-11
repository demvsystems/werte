<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Gewerbe;

/**
 * Class Firmenrechtsschutz
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Firmenrechtsschutz extends Bedarfsthema
{
    const ID = 34;

    public function __construct()
    {
        parent::__construct(self::ID, 'Firmenrechtsschutz', [Gewerbe::RECHTSSCHUTZ]);
    }
}
