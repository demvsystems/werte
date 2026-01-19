<?php

namespace Demv\Werte\Vorsorge;

enum BiproUeberschussverwendungBasis: string
{
    case ANSAMMLUNG                   = '00';
    case LAUFZEITVERKUERZUNG          = '01';
    case SUMMENERHOEHUNG              = '02';
    case LT_VERMOEGENSBILDUNGSGESETZ  = '03';
    case BARAUSZAHLUNG                = '04';
    case BONUS_TODESFALL              = '05';
    case BONUS_ERLEBENSFALL           = '06';
    case BONUS_TODES_UND_ERLEBENSFALL = '07';
    case BEITRAGSVERRECHNUNG          = '08';
    case SONSTIGES                    = '09';
    case BONUSRENTE                   = '10';
    case SCHLUSSDIVIDENDE             = '11';
    case INVESTMENTANLAGE             = '12';
    case KONSTANTE_BONUSRENTE         = '13';
    case DYNAMISCHE_BONUSRENTE        = '14';
    case TEILDYNAMISCHE_BONUSRENTE    = '15';
    case FALLENDE_BONUSRENTE          = '16';
    case INDEXBETEILIGUNG             = '17';
    case KOMBINATION                  = '18';

    public function getLabel(): string
    {
        return match ($this) {
            self::ANSAMMLUNG                   => 'Ansammlung',
            self::LAUFZEITVERKUERZUNG          => 'Laufzeitverkürzung',
            self::SUMMENERHOEHUNG              => 'Summenerhöhung',
            self::LT_VERMOEGENSBILDUNGSGESETZ  => 'lt. Vermögensbildungsgesetz',
            self::BARAUSZAHLUNG                => 'Barauszahlung',
            self::BONUS_TODESFALL              => 'Bonus Todesfall',
            self::BONUS_ERLEBENSFALL           => 'Bonus Erlebensfall',
            self::BONUS_TODES_UND_ERLEBENSFALL => 'Bonus Todes- und Erlebensfall',
            self::BEITRAGSVERRECHNUNG          => 'Beitragsverrechnung',
            self::SONSTIGES                    => 'Sonstiges',
            self::BONUSRENTE                   => 'Bonusrente',
            self::SCHLUSSDIVIDENDE             => 'Schlussdividende',
            self::INVESTMENTANLAGE             => 'Investmentanlage (Überschüsse werden in Fonds/Depots investiert)',
            self::KONSTANTE_BONUSRENTE         => 'Konstante Bonusrente',
            self::DYNAMISCHE_BONUSRENTE        => 'Dynamische Bonusrente',
            self::TEILDYNAMISCHE_BONUSRENTE    => 'Teildynamische Bonusrente',
            self::FALLENDE_BONUSRENTE          => 'Fallende Bonusrente',
            self::INDEXBETEILIGUNG             => 'Indexbeteiligung',
            self::KOMBINATION                  => 'Kombination (Aufteilung der Überschüsse auf verschiedene Verwendungen)',
        };
    }
}
