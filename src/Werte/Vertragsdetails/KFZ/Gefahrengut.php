<?php

namespace Demv\Werte\Vertragsdetails\KFZ;

enum Gefahrengut: int
{
    case KEIN_GEFAHRENGUT                                                = 1;
    case GEFAHRENGUT_MIT_GENEHMIGUNGSPFLICHT_OHNE_HEIZOEL_UND_TREIBSTOFF = 2;
    case GEFAHRENGUT_OHNE_GENEHMIGUNSPFLICHT                             = 3;
    case SONSTIGES_GEFAHRENGUT                                           = 4;
    case TREIBSTOFF_UND_HEIZOEL                                          = 5;

    public function getLabel(): string
    {
        return match ($this) {
            self::KEIN_GEFAHRENGUT                                                => 'Kein Gefahrengut',
            self::GEFAHRENGUT_MIT_GENEHMIGUNGSPFLICHT_OHNE_HEIZOEL_UND_TREIBSTOFF => 'Gefahrengut mit Genehmigungspflicht (ohne Heizöl und Treibstoff)',
            self::GEFAHRENGUT_OHNE_GENEHMIGUNSPFLICHT                             => 'Gefahrengut ohne Genehmigungspflicht',
            self::SONSTIGES_GEFAHRENGUT                                           => 'Sonstiges Gefahrengut',
            self::TREIBSTOFF_UND_HEIZOEL                                          => 'Treibstoff und Heizöl',
        };
    }
}
