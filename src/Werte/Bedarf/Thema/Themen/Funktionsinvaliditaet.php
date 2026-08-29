<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\PrivateSachversicherung;
use Demv\Werte\Sparte\Sparten\Unfallversicherung;
use Demv\Werte\Sparte\Sparten\Vorsorge;

/**
 * Class Funktionsinvaliditaet
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Funktionsinvaliditaet extends Bedarfsthema
{
    const ID = 28;

    public function __construct()
    {
        parent::__construct(self::ID, 'Multi-Risk', [
            Unfallversicherung::FUNKTIONSINVALIDITAET,
            PrivateSachversicherung::MULTIRISK_VERSICHERUNG,
            Vorsorge::MULTIRISK_INVALIDITAET,
        ]);
    }
}
