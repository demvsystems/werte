<?php

namespace Demv\Werte\Vorsorge;

enum BiproStichtagswert: string
{
    case BEITRAGSFREIE_ERLEBENSFALLLEISTUNG                        = '01';
    case BEITRAGSFREIE_RENTE                                       = '02';
    case BEITRAGSFREIE_TODESFALLLEISTUNG                           = '03';
    case ENTNAHMEMOEGLICHKEIT                                      = '04';
    case GARANTIERTE_ERLEBENSFALLLEISTUNG                          = '05';
    case GARANTIERTE_RENTE                                         = '06';
    case GARANTIERTE_TODESFALLLEISTUNG                             = '07';
    case GESAMTE_ERLEBENSFALLLEISTUNG                              = '08';
    case GESAMTER_BELEIHUNGSWERT                                   = '09';
    case GESAMTE_RENTE                                             = '10';
    case GESAMTE_TODESFALLLEISTUNG                                 = '11';
    case LETZTE_ERHALTENE_ZULAGE                                   = '12';
    case LETZTE_SONDERZUZAHLUNG                                    = '13';
    case RUECKKAUFSWERT_DEPRECATED                                 = '14';
    case SUMME_ERHALTENE_ZULAGEN                                   = '15';
    case SUMME_GEZAHLTER_BEITRAEGE                                 = '16';
    case SUMME_SONDERZUZAHLUNGEN                                   = '17';
    case UEBERSCHUSSGUTHABEN                                       = '18';
    case VERFUEGBARER_BELEIHUNGSWERT                               = '19';
    case VERTRAGSWERT                                              = '20';
    case RUECKGEWAEHRSUMME                                         = '21';
    case ABLAUFLEISTUNG                                            = '22';
    case KAPITALERTRAGSSTEUER                                      = '23';
    case SOLIDARITAETSZUSCHLAG                                     = '24';
    case RUECKKAUFSWERT_MIT_BEWERTUNGSRESERVEN_DEPRECATED          = '25';
    case ANTEIL_BEWERTUNGSRESERVEN                                 = '26';
    case FONDSGUTHABEN                                             = '27';
    case RUECKKAUFSWERT_OHNE_BEWERTUNGSRESERVEN_OHNE_UEBERSCHUESSE = '28';
    case RUECKKAUFSWERT_OHNE_BEWERTUNGSRESERVEN_MIT_UEBERSCHUESSE  = '29';
    case RUECKKAUFSWERT_MIT_MINDESTBEWERTUNGSRESERVEN              = '30';
    case RUECKKAUFSWERT_MIT_GESAMTEN_BEWERTUNGSRESERVEN            = '31';

    public function getLabel(): string
    {
        return match ($this) {
            self::BEITRAGSFREIE_ERLEBENSFALLLEISTUNG                        => 'Beitragsfreie Erlebensfallleistung',
            self::BEITRAGSFREIE_RENTE                                       => 'Beitragsfreie Rente',
            self::BEITRAGSFREIE_TODESFALLLEISTUNG                           => 'Beitragsfreie Todesfallleistung',
            self::ENTNAHMEMOEGLICHKEIT                                      => 'Entnahmemöglichkeit',
            self::GARANTIERTE_ERLEBENSFALLLEISTUNG                          => 'Garantierte Erlebensfallleistung',
            self::GARANTIERTE_RENTE                                         => 'Garantierte Rente',
            self::GARANTIERTE_TODESFALLLEISTUNG                             => 'Garantierte Todesfallleistung',
            self::GESAMTE_ERLEBENSFALLLEISTUNG                              => 'Gesamte Erlebensfallleistung inkl. hochgerechneter Überschüsse und Wertentwicklung',
            self::GESAMTER_BELEIHUNGSWERT                                   => 'Gesamter Beleihungswert',
            self::GESAMTE_RENTE                                             => 'Gesamte Rente inkl. hochgerechneter Überschüsse und Wertentwicklung',
            self::GESAMTE_TODESFALLLEISTUNG                                 => 'Gesamte Todesfallleistung inkl. hochgerechneter Überschüsse und Wertentwicklung',
            self::LETZTE_ERHALTENE_ZULAGE                                   => 'Letzte erhaltene Zulage',
            self::LETZTE_SONDERZUZAHLUNG                                    => 'Letzte Sonderzuzahlung',
            self::RUECKKAUFSWERT_DEPRECATED                                 => 'Rückkaufswert (deprecated ab Version 2.8.5 siehe Schlüssel 28 und 29)',
            self::SUMME_ERHALTENE_ZULAGEN                                   => 'Summe erhaltene Zulagen',
            self::SUMME_GEZAHLTER_BEITRAEGE                                 => 'Summe gezahlter Beiträge',
            self::SUMME_SONDERZUZAHLUNGEN                                   => 'Summe der Sonderzuzahlungen',
            self::UEBERSCHUSSGUTHABEN                                       => 'Überschussguthaben',
            self::VERFUEGBARER_BELEIHUNGSWERT                               => 'Verfügbarer Beleihungswert',
            self::VERTRAGSWERT                                              => 'Vertragswert',
            self::RUECKGEWAEHRSUMME                                         => 'Rückgewährsumme',
            self::ABLAUFLEISTUNG                                            => 'Ablaufleistung',
            self::KAPITALERTRAGSSTEUER                                      => 'Kapitalertragssteuer',
            self::SOLIDARITAETSZUSCHLAG                                     => 'Solidaritätszuschlag',
            self::RUECKKAUFSWERT_MIT_BEWERTUNGSRESERVEN_DEPRECATED          => 'Rückkaufswert inklusive Bewertungsreserven (deprecated ab Version 2.8.5 siehe Schlüssel 30 und 31)',
            self::ANTEIL_BEWERTUNGSRESERVEN                                 => 'Anteil an den Bewertungsreserven',
            self::FONDSGUTHABEN                                             => 'Fondsguthaben',
            self::RUECKKAUFSWERT_OHNE_BEWERTUNGSRESERVEN_OHNE_UEBERSCHUESSE => 'Rückkaufswert ohne Bewertungsreserven ohne Überschüsse',
            self::RUECKKAUFSWERT_OHNE_BEWERTUNGSRESERVEN_MIT_UEBERSCHUESSE  => 'Rückkaufswert ohne Bewertungsreserven mit Überschüsse',
            self::RUECKKAUFSWERT_MIT_MINDESTBEWERTUNGSRESERVEN              => 'Rückkaufswert mit Mindestbewertungsreserven',
            self::RUECKKAUFSWERT_MIT_GESAMTEN_BEWERTUNGSRESERVEN            => 'Rückkaufswert mit gesamten Bewertungsreserven',
        };
    }
}
