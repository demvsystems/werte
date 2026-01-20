<?php

namespace Demv\Werte\Vorsorge;

enum BiproZahlungsweise: string
{
    case JAEHRLICH        = '1';
    case HALBJAEHRLICH    = '2';
    case VIERTELJAEHRLICH = '3';
    case MONATLICH        = '4';
    case EINMALBETRAG     = '5';
    case SONSTIGES        = '6';
    case BEITRAGSFREI     = '7';

    public function getLabel(): string
    {
        return match ($this) {
            self::JAEHRLICH        => 'Jährlich',
            self::HALBJAEHRLICH    => 'Halbjährlich',
            self::VIERTELJAEHRLICH => 'Vierteljährlich',
            self::MONATLICH        => 'Monatlich',
            self::EINMALBETRAG     => 'Einmalbetrag',
            self::SONSTIGES        => 'Sonstiges',
            self::BEITRAGSFREI     => 'Beitragsfrei',
        };
    }
}
