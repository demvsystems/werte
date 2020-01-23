<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\PrivateSachversicherung;

final class Kinderinvaliditaet extends Bedarfsthema
{
    const ID = 27;

    public function __construct()
    {
        parent::__construct(self::ID, 'Kinderinvaliditätsversicherung', [PrivateSachversicherung::KINDERINVALIDITAET]);
    }
}
