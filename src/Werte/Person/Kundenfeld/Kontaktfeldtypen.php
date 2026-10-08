<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Kundenfeld;

use Demv\Werte\AbstractProvider;

/**
 * @extends AbstractProvider<Kundenfeldtyp>
 */
final class Kontaktfeldtypen extends AbstractProvider
{
    public const E_MAIL_ARBEIT         = 1;
    public const MOBIL_ARBEIT          = 2;
    public const TELEFON_ARBEIT        = 3;
    public const FAX_ARBEIT            = 4;
    public const E_MAIL_PRIVAT         = 5;
    public const MOBIL_PRIVAT          = 6;
    public const TELEFON_PRIVAT        = 7;
    public const FAX_PRIVAT            = 8;
    public const WEITERE_E_MAIL        = 9;
    public const WEITERE_TELEFONNUMMER = 10;
    public const FACEBOOK              = 11;
    public const TWITTER               = 12;
    public const SONSTIGES             = 13;
    public const SKYPE                 = 24;
    public const HOMEPAGE_PRIVAT       = 28;
    public const HOMEPAGE_ARBEIT       = 29;
    public const E_MAIL                = 38;
    public const TELEFON               = 39;
    public const MOBIL                 = 40;
    public const FAX                   = 41;

    private const HAUPTKONTAKT_IDS = [self::E_MAIL, self::TELEFON, self::MOBIL, self::FAX];

    public function __construct()
    {
        $this->appendMember(new Kundenfeldtyp(self::E_MAIL_ARBEIT, 'E-Mail(Arbeit)'));
        $this->appendMember(new Kundenfeldtyp(self::MOBIL_ARBEIT, 'Mobil(Arbeit)'));
        $this->appendMember(new Kundenfeldtyp(self::TELEFON_ARBEIT, 'Telefon(Arbeit)'));
        $this->appendMember(new Kundenfeldtyp(self::FAX_ARBEIT, 'Fax(Arbeit)'));
        $this->appendMember(new Kundenfeldtyp(self::E_MAIL_PRIVAT, 'E-Mail(Privat)'));
        $this->appendMember(new Kundenfeldtyp(self::MOBIL_PRIVAT, 'Mobil(Privat)'));
        $this->appendMember(new Kundenfeldtyp(self::TELEFON_PRIVAT, 'Telefon(Privat)'));
        $this->appendMember(new Kundenfeldtyp(self::FAX_PRIVAT, 'Fax(Privat)'));
        $this->appendMember(new Kundenfeldtyp(self::WEITERE_E_MAIL, 'weitere E-Mail'));
        $this->appendMember(new Kundenfeldtyp(self::WEITERE_TELEFONNUMMER, 'weitere Telefonnummer'));
        $this->appendMember(new Kundenfeldtyp(self::FACEBOOK, 'Facebook'));
        $this->appendMember(new Kundenfeldtyp(self::TWITTER, 'Twitter'));
        $this->appendMember(new Kundenfeldtyp(self::SONSTIGES, 'Sonstiges'));
        $this->appendMember(new Kundenfeldtyp(self::SKYPE, 'Skype'));
        $this->appendMember(new Kundenfeldtyp(self::HOMEPAGE_PRIVAT, 'Homepage (Privat)'));
        $this->appendMember(new Kundenfeldtyp(self::HOMEPAGE_ARBEIT, 'Homepage (Arbeit)'));
        $this->appendMember(new Kundenfeldtyp(self::E_MAIL, 'E-Mail'));
        $this->appendMember(new Kundenfeldtyp(self::TELEFON, 'Telefon'));
        $this->appendMember(new Kundenfeldtyp(self::MOBIL, 'Mobil'));
        $this->appendMember(new Kundenfeldtyp(self::FAX, 'Fax'));
    }

    /**
     * @return list<Kundenfeldtyp>
     */
    public function getHauptkontaktfeldtypen(): array
    {
        return array_values(array_filter(
            $this->getAll(),
            static fn (Kundenfeldtyp $fieldType): bool => in_array($fieldType->getId(), self::HAUPTKONTAKT_IDS, true)
        ));
    }

    /**
     * @return list<Kundenfeldtyp>
     */
    public function getWeitereKontaktfeldtypen(): array
    {
        return array_values(array_filter(
            $this->getAll(),
            static fn (Kundenfeldtyp $fieldType): bool => !in_array($fieldType->getId(), self::HAUPTKONTAKT_IDS, true)
        ));
    }
}
