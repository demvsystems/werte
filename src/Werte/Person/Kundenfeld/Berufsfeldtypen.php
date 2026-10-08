<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Kundenfeld;

use Demv\Werte\AbstractProvider;

/**
 * @extends AbstractProvider<Kundenfeldtyp>
 */
final class Berufsfeldtypen extends AbstractProvider
{
    public const NEBENJOB                   = 14;
    public const WEITERER_BERUF             = 15;
    public const BERUFSSTATUS_FREI          = 16;
    public const BRUTTOMONATSEINKOMMEN      = 17;
    public const NETTOMONATSEINKOMMEN       = 18;
    public const ARBEITGEBER                = 19;
    public const KONTAKT_ARBEITGEBER        = 20;
    public const SONSTIGES                  = 21;
    public const KINDERGELDNUMMER           = 25;
    public const KINDERGELDAKTENZEICHEN     = 26;
    public const FAMILIENKASSE              = 27;
    public const ERLERNTER_BERUF            = 30;
    public const BESCHAEFTIGT_SEIT          = 31;
    public const BRANCHE                    = 34;
    public const GEWINN                     = 35;
    public const ZU_VERSTEUERNDES_EINKOMMEN = 36;
    public const BETRIEBSART                = 37;

    public function __construct()
    {
        $this->appendMember(new Kundenfeldtyp(self::NEBENJOB, 'Nebenjob'));
        $this->appendMember(new Kundenfeldtyp(self::WEITERER_BERUF, 'Weiterer Beruf'));
        $this->appendMember(new Kundenfeldtyp(self::BERUFSSTATUS_FREI, 'Berufsstatus frei'));
        $this->appendMember(new Kundenfeldtyp(self::BRUTTOMONATSEINKOMMEN, 'Bruttomonatseinkommen'));
        $this->appendMember(new Kundenfeldtyp(self::NETTOMONATSEINKOMMEN, 'Nettomonatseinkommen'));
        $this->appendMember(new Kundenfeldtyp(self::ARBEITGEBER, 'Arbeitgeber'));
        $this->appendMember(new Kundenfeldtyp(self::KONTAKT_ARBEITGEBER, 'Kontakt Arbeitgeber'));
        $this->appendMember(new Kundenfeldtyp(self::SONSTIGES, 'Sonstiges'));
        $this->appendMember(new Kundenfeldtyp(self::KINDERGELDNUMMER, 'Kindergeldnummer'));
        $this->appendMember(new Kundenfeldtyp(self::KINDERGELDAKTENZEICHEN, 'Kindergeldaktenzeichen'));
        $this->appendMember(new Kundenfeldtyp(self::FAMILIENKASSE, 'Familienkasse'));
        $this->appendMember(new Kundenfeldtyp(self::ERLERNTER_BERUF, 'Erlernter Beruf'));
        $this->appendMember(new Kundenfeldtyp(self::BESCHAEFTIGT_SEIT, 'Beschäftigt seit'));
        $this->appendMember(new Kundenfeldtyp(self::BRANCHE, 'Branche'));
        $this->appendMember(new Kundenfeldtyp(self::GEWINN, 'Gewinn'));
        $this->appendMember(new Kundenfeldtyp(self::ZU_VERSTEUERNDES_EINKOMMEN, 'Zu versteuerndes Einkommen'));
        $this->appendMember(new Kundenfeldtyp(self::BETRIEBSART, 'Betriebsart'));
    }
}
