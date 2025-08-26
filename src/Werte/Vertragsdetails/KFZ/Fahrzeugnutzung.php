<?php

namespace Demv\Werte\Vertragsdetails\KFZ;

enum Fahrzeugnutzung: int
{
    case AUSSCHLIESSLICH_PRIVAT                           = 1;
    case UEBERWIEGEND_PRIVAT                              = 2;
    case GEWERBLICH_FUER_KUNDENDIENST                     = 3;
    case GEWERBLICH_ZUR_UNENTGELTLICHEN_WARENAUSLIEFERUNG = 4;
    case GEWERBLICH_ZUR_ENTGELTLICHEN_WARENLIEFERUNG      = 5;
    case GEWERBLICH_FUER_SOZIALE_ZWECKE                   = 6;
    case GEWERBLICHE_FAHRTEN_VON_HANDEL_UND_HANDWERK      = 7;
    case GEWERBLICH_FUER_SONSTIGE_ZWECKE                  = 8;
    case EINSATZ_IM_WINTERDIENST                          = 9;
    case EINSATZ_ZUR_ENTGELTLICHEN_PERSONENBEFOERDERUNG   = 10;
    case EINSATZ_ZUR_ENTGELTLICHEN_WARENBEFOERDERUNG      = 11;

    public function getLabel(): string
    {
        return match ($this) {
            self::AUSSCHLIESSLICH_PRIVAT                           => 'Ausschließlich privat',
            self::UEBERWIEGEND_PRIVAT                              => 'Überwiegend privat',
            self::GEWERBLICH_FUER_KUNDENDIENST                     => 'Gewerblich für Kundendienst',
            self::GEWERBLICH_ZUR_UNENTGELTLICHEN_WARENAUSLIEFERUNG => 'Gewerblich zur unentgeltlichen Warenauslieferung',
            self::GEWERBLICH_ZUR_ENTGELTLICHEN_WARENLIEFERUNG      => 'Gewerblich zur entgeltlichen Warenlieferung',
            self::GEWERBLICH_FUER_SOZIALE_ZWECKE                   => 'Gewerblich für soziale Zwecke',
            self::GEWERBLICHE_FAHRTEN_VON_HANDEL_UND_HANDWERK      => 'Gewerbliche Fahrten von Handel und Handwerk',
            self::GEWERBLICH_FUER_SONSTIGE_ZWECKE                  => 'Gewerblich für sonstige Zwecke',
            self::EINSATZ_IM_WINTERDIENST                          => 'Einsatz im Winterdienst',
            self::EINSATZ_ZUR_ENTGELTLICHEN_PERSONENBEFOERDERUNG   => 'Einsatz zur entgeltlichen Personenbeförderung',
            self::EINSATZ_ZUR_ENTGELTLICHEN_WARENBEFOERDERUNG      => 'Einsatz zur entgeltlichen Warenbeförderung',
        };
    }
}
