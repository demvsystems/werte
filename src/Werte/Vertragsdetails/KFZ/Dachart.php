<?php

namespace Demv\Werte\Vertragsdetails\KFZ;

enum Dachart: int
{
    case ALUMINIUM_GLATTBLECH            = 1;
    case ALUMINIUM_HAMMERSCHLAG          = 2;
    case DURABED_PRC_BESCHICHTUNG        = 3;
    case GLASFASERVERSTAERKTER_KUSTSTOFF = 4;
    case SONSTIGES                       = 5;
    case STAHLBLECH                      = 6;
    case WARU_SCHAUMDACH                 = 7;

    public function getLabel(): string
    {
        return match ($this) {
            self::ALUMINIUM_GLATTBLECH            => 'Aluminium Glattblech',
            self::ALUMINIUM_HAMMERSCHLAG          => 'Aluminium Hammerschlag',
            self::DURABED_PRC_BESCHICHTUNG        => 'Durabed (PRC-Beschichtung)',
            self::GLASFASERVERSTAERKTER_KUSTSTOFF => 'Glasfaserverstärkter Kunststoff',
            self::SONSTIGES                       => 'Sonstiges',
            self::STAHLBLECH                      => 'Stahlblech',
            self::WARU_SCHAUMDACH                 => 'Waru-Schaumdach',
        };
    }
}
