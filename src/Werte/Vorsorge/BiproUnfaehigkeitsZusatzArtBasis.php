<?php

namespace Demv\Werte\Vorsorge;

enum BiproUnfaehigkeitsZusatzArtBasis: string
{
    case FONDSGEBUNDEN                             = '01';
    case TODESFALLLEISTUNG_STEIGEND                = '02';
    case TODESFALLLEISTUNG_FALLEND                 = '03';
    case DYNAMISCH                                 = '04';
    case FESTER_ABLAUFTERMIN                       = '05';
    case KINDERVERSORGUNG                          = '06';
    case BESTATTUNGSVERSORGUNG                     = '07';
    case TEILAUSZAHLUNG                            = '08';
    case VERBUNDENE_LEBEN                          = '09';
    case VERMOEGENSWIRKSAME_LEISTUNG               = '10';
    case FLEXIBLE_AUSZAHLPHASE                     = '11';
    case GRUPPENVERTRAGSKONDITIONEN                = '12';
    case OHNE_GESUNDHEITSFRAGEN                    = '13';
    case UNTERSCHIEDLICHE_BEITRAGSVERLAUFE         = '14';
    case NIEDRIGER_GRANATIEZINS                    = '15';
    case LEBENSLANG                                = '16';
    case ABGEKUERZT                                = '17';
    case SOFORTBEGINNEND                           = '18';
    case PRIVAT                                    = '19';
    case RIESTERRENTE                              = '20';
    case BASISRENTE                                = '21';
    case MIT_BEITRAGSRUECKGEWAEHR                  = '22';
    case MIT_RENTENGARANTIEZEIT                    = '23';
    case MIT_RENTENAUSZAHLUNG                      = '24';
    case NICHTRAUCHER                              = '25';
    case UMTAUSCHOPTION                            = '26';
    case FALLENDE_LEISTUNG                         = '27';
    case ABWEICHENDE_LEISTUNGSDAUER                = '28';
    case AUSPRAEGUNG_ERWERBSUNFAEHIGKEIT           = '29';
    case AUSPRAEGUNG_BERUFSUNFAEHIGKEIT            = '30';
    case AUSPRAEGUNG_ERWERBSMINDERUNG              = '31';
    case NACHVERSICHERUNGSGARANTIE                 = '32';
    case KARENZZEIT                                = '33';
    case EINMALLEISTUNG                            = '34';
    case PFLEGESTUFE_1                             = '35';
    case LEISTUNGSART_KAPITAL                      = '36';
    case LEISTUNGSART_RENTE                        = '37';
    case LEISTUNGSART_GEMISCHT                     = '38';
    case BEITRAGSBEFREIUNG                         = '39';
    case ERLEBENSFALLLEISTUNG_NIEDRIGER            = '40';
    case ERLEBENSFALLLEISTUNG_HOEHER               = '41';
    case LEISTUNG_BEI_HEIRAT                       = '42';
    case HINTERBLIEBENENRENTE                      = '43';
    case VERFUEGUNGSOPTION                         = '44';
    case PFLEGESTUFE_2                             = '45';
    case PFLEGESTUFE_3                             = '46';
    case BEITRAGSERHALTUNGSGARANTIE                = '47';
    case BEITRAGSERHALTUNGSGARANTIE_INVESTMENT     = '48';
    case OEFFENTLICHER_DIENST                      = '49';
    case KLASSISCH                                 = '50';
    case KONSTANTE_TODESFALLLEISTUNG               = '51';
    case LEISTUNGSSTAFFEL                          = '52';
    case PFLEGEGRAD_1                              = '53';
    case PFLEGEGRAD_2                              = '54';
    case PFLEGEGRAD_3                              = '55';
    case PFLEGEGRAD_4                              = '56';
    case PFLEGEGRAD_5                              = '57';
    case LEISTUNGSEINSCHRAENKUNG_ZU_VERTRAGSBEGINN = '58';
    case INDEXBASIERT                              = '59';
    case VERMINDERTER_ANFANGSBEITRAG               = '60';
    case AUFLOESUNGSVEREINBARUNG                   = '61';

    public function getLabel(): string
    {
        return match ($this) {
            self::FONDSGEBUNDEN                             => 'fondsgebunden',
            self::TODESFALLLEISTUNG_STEIGEND                => 'Todesfallleistung steigend',
            self::TODESFALLLEISTUNG_FALLEND                 => 'Todesfallleistung fallend',
            self::DYNAMISCH                                 => 'dynamisch',
            self::FESTER_ABLAUFTERMIN                       => 'fester Ablauftermin',
            self::KINDERVERSORGUNG                          => 'Kinderversorgung',
            self::BESTATTUNGSVERSORGUNG                     => 'Bestattungsversorgung',
            self::TEILAUSZAHLUNG                            => 'Teilauszahlung',
            self::VERBUNDENE_LEBEN                          => 'verbundene Leben',
            self::VERMOEGENSWIRKSAME_LEISTUNG               => 'vermögenswirksame Leistung',
            self::FLEXIBLE_AUSZAHLPHASE                     => 'flexible Auszahlphase',
            self::GRUPPENVERTRAGSKONDITIONEN                => 'Gruppenvertragskonditionen',
            self::OHNE_GESUNDHEITSFRAGEN                    => 'ohne Gesundheitsfragen',
            self::UNTERSCHIEDLICHE_BEITRAGSVERLAUFE         => 'unterschiedliche Beitragsverläufe',
            self::NIEDRIGER_GRANATIEZINS                    => 'niedriger Granatiezins',
            self::LEBENSLANG                                => 'lebenslang',
            self::ABGEKUERZT                                => 'abgekürzt',
            self::SOFORTBEGINNEND                           => 'sofortbeginnend',
            self::PRIVAT                                    => 'privat',
            self::RIESTERRENTE                              => 'Riesterrente',
            self::BASISRENTE                                => 'Basisrente',
            self::MIT_BEITRAGSRUECKGEWAEHR                  => 'mit Beitragsrückgewähr',
            self::MIT_RENTENGARANTIEZEIT                    => 'mit Rentengarantiezeit',
            self::MIT_RENTENAUSZAHLUNG                      => 'mit Rentenauszahlung',
            self::NICHTRAUCHER                              => 'Nichtraucher',
            self::UMTAUSCHOPTION                            => 'Umtauschoption',
            self::FALLENDE_LEISTUNG                         => 'fallende Leistung',
            self::ABWEICHENDE_LEISTUNGSDAUER                => 'abweichende Leistungsdauer',
            self::AUSPRAEGUNG_ERWERBSUNFAEHIGKEIT           => 'Ausprägung Erwerbsunfähigkeit',
            self::AUSPRAEGUNG_BERUFSUNFAEHIGKEIT            => 'Ausprägung Berufsunfähigkeit',
            self::AUSPRAEGUNG_ERWERBSMINDERUNG              => 'Ausprägung Erwerbsminderung',
            self::NACHVERSICHERUNGSGARANTIE                 => 'Nachversicherungsgarantie',
            self::KARENZZEIT                                => 'Karenzzeit',
            self::EINMALLEISTUNG                            => 'Einmalleistung',
            self::PFLEGESTUFE_1                             => 'Pflegestufe 1',
            self::LEISTUNGSART_KAPITAL                      => 'Leistungsart Kapital',
            self::LEISTUNGSART_RENTE                        => 'Leistungsart Rente',
            self::LEISTUNGSART_GEMISCHT                     => 'Leistungsart gemischt',
            self::BEITRAGSBEFREIUNG                         => 'Beitragsbefreiung',
            self::ERLEBENSFALLLEISTUNG_NIEDRIGER            => 'Erlebensfallleistung niedriger',
            self::ERLEBENSFALLLEISTUNG_HOEHER               => 'Erlebensfallleistung höher',
            self::LEISTUNG_BEI_HEIRAT                       => 'Leistung bei Heirat',
            self::HINTERBLIEBENENRENTE                      => 'Hinterbliebenenrente',
            self::VERFUEGUNGSOPTION                         => 'Verfügungsoption',
            self::PFLEGESTUFE_2                             => 'Pflegestufe 2',
            self::PFLEGESTUFE_3                             => 'Pflegestufe 3',
            self::BEITRAGSERHALTUNGSGARANTIE                => 'Beitragserhaltungsgarantie',
            self::BEITRAGSERHALTUNGSGARANTIE_INVESTMENT     => 'Beitragserhaltungsgarantie Investment',
            self::OEFFENTLICHER_DIENST                      => 'öffentlicher Dienst',
            self::KLASSISCH                                 => 'klassisch (nicht fondsgebunden)',
            self::KONSTANTE_TODESFALLLEISTUNG               => 'konstante Todesfallleistung',
            self::LEISTUNGSSTAFFEL                          => 'Leistungsstaffel',
            self::PFLEGEGRAD_1                              => 'Pflegegrad 1',
            self::PFLEGEGRAD_2                              => 'Pflegegrad 2',
            self::PFLEGEGRAD_3                              => 'Pflegegrad 3',
            self::PFLEGEGRAD_4                              => 'Pflegegrad 4',
            self::PFLEGEGRAD_5                              => 'Pflegegrad 5',
            self::LEISTUNGSEINSCHRAENKUNG_ZU_VERTRAGSBEGINN => 'Leistungseinschränkung zu Vertragsbeginn',
            self::INDEXBASIERT                              => 'indexbasiert',
            self::VERMINDERTER_ANFANGSBEITRAG               => 'verminderter Anfangsbeitrag',
            self::AUFLOESUNGSVEREINBARUNG                   => 'Auflösungsvereinbarung',
        };
    }
}
