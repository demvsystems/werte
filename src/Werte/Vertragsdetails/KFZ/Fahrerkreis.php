<?php

namespace Demv\Werte\Vertragsdetails\KFZ;

enum Fahrerkreis: int
{
    case EINZELFAHERER                                = 1;
    case EINZELFAHRER_UND_PARTNER                     = 2;
    case OFFENER_FAHRERKREIS                          = 3;
    case OFFENER_FAHRERKREIS_MIT_ALTERSEINSCHRAENKUNG = 4;

    public function getLabel(): string
    {
        return match ($this) {
            self::EINZELFAHERER                                => 'Einzelfahrer',
            self::EINZELFAHRER_UND_PARTNER                     => 'Einzelfahrer und Partner',
            self::OFFENER_FAHRERKREIS                          => 'Offener Fahrerkreis',
            self::OFFENER_FAHRERKREIS_MIT_ALTERSEINSCHRAENKUNG => 'Offener Fahrerkreis mit Alterseinschränkung',
        };
    }
}
