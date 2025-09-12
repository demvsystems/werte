<?php

namespace Demv\Werte\Vertragsdetails\Allgemein;

enum WerteEinheit: string
{
    case TYPE_0  = 'keine Angabe';
    case TYPE_1  = 'Stück';
    case TYPE_2  = 'Plätze';
    case TYPE_3  = 'Wohneinheiten';
    case TYPE_4  = 'Gewerbeeinheiten';
    case TYPE_5  = 'Wohn- / Gewerbeeinheiten';
    case TYPE_10 = 'Prozent';
    case TYPE_11 = 'Promille';
    case TYPE_20 = 'Währung';
    case TYPE_21 = 'Mark 1914';
    case TYPE_30 = 'cm';
    case TYPE_31 = 'mm (Millimeter)';
    case TYPE_32 = 'm (Meter)';
    case TYPE_33 = 'km (Kilometer)';
    case TYPE_34 = 'Meilen';
    case TYPE_40 = 'qm';
    case TYPE_41 = 'ha (Hektar)';
    case TYPE_50 = 'Liter';
    case TYPE_51 = 'ccm';
    case TYPE_52 = 'qbm (Kubikmeter)';
    case TYPE_53 = 'BRT (Bruttoregistertonnen)';
    case TYPE_54 = 'BRZ (Bruttoraumzahl)';
    case TYPE_56 = 'ts (Ton Standard, Maßeinheit für die Standardverdrängung, zivil auch "ton long" genannt, 1 ts = 1016 kg)';
    case TYPE_60 = 'Kalendertage';
    case TYPE_61 = 'Arbeitstage';
    case TYPE_62 = 'Jahre';
    case TYPE_63 = 'Stunden';
    case TYPE_70 = 'KW (Kilowatt)';
    case TYPE_71 = 'PS (Pferdestärke)';
    case TYPE_72 = 'kWP (Kilowatt Peak)';
    case TYPE_80 = 'kg (Kilogramm)';
    case TYPE_81 = 't (Tonnen)';

    public static function getByCode(int $code): WerteEinheit
    {
        return match ($code) {
            1       => self::TYPE_1,
            2       => self::TYPE_2,
            3       => self::TYPE_3,
            4       => self::TYPE_4,
            5       => self::TYPE_5,
            10      => self::TYPE_10,
            11      => self::TYPE_11,
            20      => self::TYPE_20,
            21      => self::TYPE_21,
            30      => self::TYPE_30,
            31      => self::TYPE_31,
            32      => self::TYPE_32,
            33      => self::TYPE_33,
            34      => self::TYPE_34,
            40      => self::TYPE_40,
            41      => self::TYPE_41,
            50      => self::TYPE_50,
            51      => self::TYPE_51,
            52      => self::TYPE_52,
            53      => self::TYPE_53,
            54      => self::TYPE_54,
            56      => self::TYPE_56,
            60      => self::TYPE_60,
            61      => self::TYPE_61,
            62      => self::TYPE_62,
            63      => self::TYPE_63,
            70      => self::TYPE_70,
            71      => self::TYPE_71,
            72      => self::TYPE_72,
            80      => self::TYPE_80,
            81      => self::TYPE_81,
            default => self::TYPE_0,
        };
    }

    public function toCode(): int
    {
        return (int) str_replace('TYPE_', '', $this->name);
    }

    public static function values(): array
    {
        return array_map(
            fn (self $werteeinheit) => $werteeinheit->toCode(),
            self::cases()
        );
    }

    public static function names(): array
    {
        return array_map(
            fn (self $werteeinheit) => $werteeinheit->value,
            self::cases()
        );
    }

    public static function label(): string
    {
        return 'Verfügbare Optionen:</br>' . implode(
            '</br>',
            array_map(
                fn (self $werteeinheit) => $werteeinheit->value,
                self::cases()
            )
        );
    }
}
