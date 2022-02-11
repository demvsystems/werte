<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Gewerbe;

/**
 * Class Cyberversicherung
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Cyberversicherung extends Bedarfsthema
{
    const ID = 36;

    public function __construct()
    {
        parent::__construct(self::ID, 'Cyber-Versicherung', [Gewerbe::CYBER]);
    }
}
