<?php

namespace Demv\Werte\Person\Rolle;

enum Rolle: int
{
    case VERMITTLER                   = 1;
    case GESELLSCHAFT                 = 2;
    case WHITE_LABEL                  = 3;
    case ADMIN                        = 4;
    case HAUPTVERMITTLER              = 5;
    case INNENDIENST                  = 6;
    case GESELLSCHAFT_ANSPRECHPARTNER = 8;
    case TESTNUTZER                   = 9;

    public function getLabel(): string
    {
        return match ($this) {
            self::VERMITTLER                   => 'Vermittler',
            self::GESELLSCHAFT                 => 'Gesellschaft',
            self::WHITE_LABEL                  => 'White Label',
            self::ADMIN                        => 'Admin',
            self::HAUPTVERMITTLER              => 'Hauptvermittler',
            self::INNENDIENST                  => 'Innendienst',
            self::GESELLSCHAFT_ANSPRECHPARTNER => 'Gesellschaft Ansprechpartner',
            self::TESTNUTZER                   => 'Testnutzer',
        };
    }

    public function getSlug(): string
    {
        return match ($this) {
            self::VERMITTLER                   => 'vermittler',
            self::GESELLSCHAFT                 => 'gesellschaft',
            self::WHITE_LABEL                  => 'white-label',
            self::ADMIN                        => 'admin',
            self::HAUPTVERMITTLER              => 'hauptvermittler',
            self::INNENDIENST                  => 'innendienst',
            self::GESELLSCHAFT_ANSPRECHPARTNER => 'gesellschaft-ansprechpartner',
            self::TESTNUTZER                   => 'testnutzer',
        };
    }

    public static function tryFromSlug(string $slug): ?self
    {
        return match ($slug) {
            self::VERMITTLER->getSlug()                   => self::VERMITTLER,
            self::GESELLSCHAFT->getSlug()                 => self::GESELLSCHAFT,
            self::WHITE_LABEL->getSlug()                  => self::WHITE_LABEL,
            self::ADMIN->getSlug()                        => self::ADMIN,
            self::HAUPTVERMITTLER->getSlug()              => self::HAUPTVERMITTLER,
            self::INNENDIENST->getSlug()                  => self::INNENDIENST,
            self::GESELLSCHAFT_ANSPRECHPARTNER->getSlug() => self::GESELLSCHAFT_ANSPRECHPARTNER,
            self::TESTNUTZER->getSlug()                   => self::TESTNUTZER,
            default                                       => null,
        };
    }
}
