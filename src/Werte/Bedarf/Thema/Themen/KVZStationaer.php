<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\PrivateKrankenzusatzversicherung;
use Demv\Werte\Sparte\Sparten\Vorsorge;

/**
 * Class KVZStationaer
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
final class KVZStationaer extends Bedarfsthema
{
    const ID = 7;

    /**
     * KVZStationaer constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Krankenhauszusatzversicherung', [PrivateKrankenzusatzversicherung::STATIONAER]);
    }
}
