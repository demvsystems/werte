<?php

namespace Demv\Werte\Vertragsdetails\KFZ;

enum NachtAbstellplatz: int
{
    case ABSCHLIESSBARE_EINZEL_DOPPELGARAGE       = 1;
    case ABSCHLIESSBARE_TIEFGARAGE_IN_MFH         = 2;
    case TIEFGARAGE_MIT_ABSCHLIESSBARER_GITTERBOX = 3;
    case GESICHERTES_GRUNDSTUECK                  = 4;
    case CARPORT                                  = 5;
    case PRIVATE_EINFAHRT                         = 6;
    case OEFFENTLICHE_TIEFGARAGE                  = 7;
    case OEFFENTLICHE_STRASSE_PARKPLATZ           = 8;

    public function getLabel(): string
    {
        return match ($this) {
            self::ABSCHLIESSBARE_EINZEL_DOPPELGARAGE       => 'Abschließbare Einzel-/Doppelgarage',
            self::ABSCHLIESSBARE_TIEFGARAGE_IN_MFH         => 'Abschließbare Tiefgarage in MFH',
            self::TIEFGARAGE_MIT_ABSCHLIESSBARER_GITTERBOX => 'Tiefgarage mit abschließbarer Gitterbox',
            self::GESICHERTES_GRUNDSTUECK                  => 'Gesichertes Grundstück',
            self::CARPORT                                  => 'Carport',
            self::PRIVATE_EINFAHRT                         => 'Private Einfahrt',
            self::OEFFENTLICHE_TIEFGARAGE                  => 'Öffentliche Tiefgarage',
            self::OEFFENTLICHE_STRASSE_PARKPLATZ           => 'Öffentliche Straße/Parkplatz',
        };
    }
}
