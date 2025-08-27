<?php

namespace Demv\Werte\Vertragsdetails\KFZ;

enum Auslandsnutzung: int
{
    case KEINE            = 1;
    case NUR_IM_URLAUB_EU = 2;
    case REGELMAESSIG_EU  = 3;
    case GRENZGAENGER_EU  = 4;
    case NICHT_EU_AUSLAND = 5;

    public function getLabel(): string
    {
        return match ($this) {
            self::KEINE            => 'Keine',
            self::NUR_IM_URLAUB_EU => 'Nur im Urlaub (EU)',
            self::REGELMAESSIG_EU  => 'Regelmäßig (EU)',
            self::GRENZGAENGER_EU  => 'Grenzgänger (EU)',
            self::NICHT_EU_AUSLAND => 'Nicht EU-Ausland',
        };
    }
}
