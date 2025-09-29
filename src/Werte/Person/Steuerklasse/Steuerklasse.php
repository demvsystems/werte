<?php

namespace Demv\Werte\Person\Steuerklasse;

enum Steuerklasse: int
{
    case STEUERKLASSE_1 = 1;
    case STEUERKLASSE_2 = 2;
    case STEUERKLASSE_3 = 3;
    case STEUERKLASSE_4 = 4;
    case STEUERKLASSE_5 = 5;
    case STEUERKLASSE_6 = 6;

    public function getLabel(): string
    {
        return match ($this) {
            self::STEUERKLASSE_1 => 'Ledig, geschieden, verwitwet',
            self::STEUERKLASSE_2 => 'Alleinerziehend mit Entlastungsbetrag',
            self::STEUERKLASSE_3 => 'Verheiratet/Verpartnert - höheres Einkommen',
            self::STEUERKLASSE_4 => 'Verheiratet/Verpartnert - ähnliche Einkommen',
            self::STEUERKLASSE_5 => 'Verheiratet/Verpartnert - geringeres Einkommen',
            self::STEUERKLASSE_6 => 'Für zusätzliche Arbeitsverhältnisse unabhängig vom Familienstand',
        };
    }
}
