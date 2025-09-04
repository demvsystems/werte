<?php

namespace Demv\Werte\Vertragsdetails\KFZ;

enum Bauart: int
{
    case CHOPPER_CRUISER      = 1;
    case CUSTOMBIKE           = 2;
    case ENDURO               = 3;
    case NAKED_BIKE           = 4;
    case ROLLER               = 5;
    case SONSTIGES            = 6;
    case SPORT                = 7;
    case SPORTTOURER          = 8;
    case SUPERSPORTLER        = 9;
    case TOURER               = 10;
    case GESCHLOSSENER_KASTEN = 11;
    case KIPPER               = 12;
    case OFFENER_KASTEN       = 13;
    case PLANE_UND_SPRIEGEL   = 14;
    case SONSTIGER_AUFBAU     = 15;
    case ALKOVEN              = 16;
    case KASTENWAGEN          = 17;
    case TEILINTEGRIERT       = 18;
    case VOLLINTEGRIERT       = 19;

    public function getLabel(): string
    {
        return match ($this) {
            self::CHOPPER_CRUISER      => 'Chopper / Cruiser',
            self::CUSTOMBIKE           => 'Custombike',
            self::ENDURO               => 'Enduro',
            self::NAKED_BIKE           => 'Naked Bike',
            self::ROLLER               => 'Roller',
            self::SONSTIGES            => 'Sonstiges',
            self::SPORT                => 'Sport',
            self::SPORTTOURER          => 'Sporttourer',
            self::SUPERSPORTLER        => 'Supersportler',
            self::TOURER               => 'Tourer',
            self::GESCHLOSSENER_KASTEN => 'Geschlossener Kasten',
            self::KIPPER               => 'Kipper',
            self::OFFENER_KASTEN       => 'Offener Kasten',
            self::PLANE_UND_SPRIEGEL   => 'Plane und Spriegel',
            self::SONSTIGER_AUFBAU     => 'Sonstiger Aufbau',
            self::ALKOVEN              => 'Alkoven',
            self::KASTENWAGEN          => 'Kastenwagen',
            self::TEILINTEGRIERT       => 'Teilintegriert',
            self::VOLLINTEGRIERT       => 'Vollintegriert',
        };
    }
}
