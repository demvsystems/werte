<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Unfallversicherung;

/**
 * Class Funktionsinvaliditaet
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
final class Funktionsinvaliditaet extends Bedarfsthema
{
    const ID = 28;

    public function __construct()
    {
        parent::__construct(self::ID, 'Multi-Risk', [Unfallversicherung::FUNKTIONSINVALIDITAET]);
    }
}
