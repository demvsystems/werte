<?php

namespace Demv\Werte\Vertragsdetails\KFZ;

enum Halter: int
{
    case PARTNER_IN_HAEUSLICHER_GEMEINSCHAFT                = 1;
    case KIND_IN_HAEUSLICHER_GEMEINSCHAFT                   = 2;
    case BEHINDERTES_KIND_IN_HAEUSLICHER_GEMEINSCHAFT       = 3;
    case BEHINDERTES_ELTERNTEIL_IN_HAEUSLICHER_GEMEINSCHAFT = 4;
    case ELTERNTEIL_IN_HAEUSLICHER_GEMEINSCHAFT             = 5;
    case ANDERE_PERSONEN_IN_HAEUSLICHER_GEMEINSCHAFT        = 6;
    case FIRMENINHABER                                      = 7;
    case FIRMA_DES_VN                                       = 8;
    case LEASINGGEBER_DES_VN                                = 9;
    case WERKSANGEHOERIGER_EINES_AUTOHERSTELLERS            = 10;
    case LEASINGNEHMER                                      = 11;
    case KREDITGEBER                                        = 12;
    case KFZ_HAENDLER                                       = 13;
    case SONSTIGES                                          = 14;

    public function getLabel(): string
    {
        return match ($this) {
            self::PARTNER_IN_HAEUSLICHER_GEMEINSCHAFT                => '(Ehe-)Partner in häuslicher Gemeinschaft',
            self::KIND_IN_HAEUSLICHER_GEMEINSCHAFT                   => 'Kind in häuslicher Gemeinschaft',
            self::BEHINDERTES_KIND_IN_HAEUSLICHER_GEMEINSCHAFT       => 'Behindertes Kind in häuslicher Gemeinschaft',
            self::BEHINDERTES_ELTERNTEIL_IN_HAEUSLICHER_GEMEINSCHAFT => 'Behindertes Elternteil in häuslicher Gemeinschaft',
            self::ELTERNTEIL_IN_HAEUSLICHER_GEMEINSCHAFT             => 'Elternteil in häuslicher Gemeinschaft',
            self::ANDERE_PERSONEN_IN_HAEUSLICHER_GEMEINSCHAFT        => 'Andere Personen in häuslicher Gemeinschaft',
            self::FIRMENINHABER                                      => 'Firmeninhaber',
            self::FIRMA_DES_VN                                       => 'Firma des VN',
            self::LEASINGGEBER_DES_VN                                => 'Leasinggeber des VN',
            self::WERKSANGEHOERIGER_EINES_AUTOHERSTELLERS            => 'Werksangehöriger eines Autoherstellers',
            self::LEASINGNEHMER                                      => 'Leasingnehmer',
            self::KREDITGEBER                                        => 'Kreditgeber',
            self::KFZ_HAENDLER                                       => 'Kfz-Händler',
            self::SONSTIGES                                          => 'Sonstiges',
        };
    }
}
