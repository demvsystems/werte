<?php

namespace Demv\Werte\Person\Rolle;

enum Rolle: int
{
    case VERMITTLER                   = 1;
    case GESELLSCHAFT                 = 2;
    case WHITE_LABEL                  = 3;
    case ADMIN                        = 4;
    case HAUPTVERMITTLER              = 5;
    case INNENDIENST                  = 6;
    case GESELLSCHAFT_ANSPRECHPARTNER = 8;
    case TESTNUTZER                   = 9;
    case UNBEKANNT                    = 0;

    public function getLabel(): string
    {
        return match ($this) {
            self::VERMITTLER                   => 'Vermittler',
            self::GESELLSCHAFT                 => 'Gesellschaft',
            self::WHITE_LABEL                  => 'White Label',
            self::ADMIN                        => 'Admin',
            self::HAUPTVERMITTLER              => 'Hauptvermittler',
            self::INNENDIENST                  => 'Innendienst',
            self::GESELLSCHAFT_ANSPRECHPARTNER => 'Gesellschaft Ansprechpartner',
            self::TESTNUTZER                   => 'Testnutzer',
            self::UNBEKANNT                    => 'Unbekannt',
        };
    }
}
