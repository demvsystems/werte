<?php

namespace Demv\Werte\Person\Status;

enum Status: int
{
    case AKTIV         = 1;
    case PASSIV        = 2;
    case STORNIERT     = 3;
    case INTERESSIERT  = 4;
    case NEUER_PARTNER = 5;

    public function getLabel(): string
    {
        return match ($this) {
            self::AKTIV         => 'Aktiv',
            self::PASSIV        => 'Passiv',
            self::STORNIERT     => 'Storniert',
            self::INTERESSIERT  => 'Interessiert',
            self::NEUER_PARTNER => 'Neuer Partner',
        };
    }

    public function getSlug(): string
    {
        return match ($this) {
            self::AKTIV         => 'aktiv',
            self::PASSIV        => 'passiv',
            self::STORNIERT     => 'storniert',
            self::INTERESSIERT  => 'interessiert',
            self::NEUER_PARTNER => 'neuer-partner',
        };
    }

    public static function tryFromSlug(string $slug): ?self
    {
        return match ($slug) {
            self::AKTIV->getSlug()         => self::AKTIV,
            self::PASSIV->getSlug()        => self::PASSIV,
            self::STORNIERT->getSlug()     => self::STORNIERT,
            self::INTERESSIERT->getSlug()  => self::INTERESSIERT,
            self::NEUER_PARTNER->getSlug() => self::NEUER_PARTNER,
            default                        => null,
        };
    }
}
