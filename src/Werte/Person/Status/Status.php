<?php

namespace Demv\Werte\Person\Status;

enum Status: int
{
    case AKTIV         = 1;
    case PASSIV        = 2;
    case STORNIERT     = 3;
    case INTERESSIERT  = 4;
    case NEUER_PARTNER = 5;

    public function getLabel(): string
    {
        return match ($this) {
            self::AKTIV         => 'Aktiv',
            self::PASSIV        => 'Passiv',
            self::STORNIERT     => 'Storniert',
            self::INTERESSIERT  => 'Interessiert',
            self::NEUER_PARTNER => 'Neuer Partner',
        };
    }
}
