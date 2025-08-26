<?php

namespace Demv\Werte\Vertragsdetails\KFZ;

enum Finanzierungsart: int
{
    case EIGENFINANZIERUNG  = 1;
    case KREDITFINANZIERUNG = 2;
    case LEASING            = 3;

    public function getLabel(): string
    {
        return match ($this) {
            self::EIGENFINANZIERUNG  => 'Eigenfinanzierung',
            self::KREDITFINANZIERUNG => 'Kreditfinanzierung',
            self::LEASING            => 'Leasing',
        };
    }
}
