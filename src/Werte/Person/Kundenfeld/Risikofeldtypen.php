<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Kundenfeld;

use Demv\Werte\AbstractProvider;

/**
 * @extends AbstractProvider<Kundenfeldtyp>
 */
final class Risikofeldtypen extends AbstractProvider
{
    public const SONSTIGES          = 22;
    public const FUEHRERSCHEIN      = 32;
    public const FUEHRERSCHEIN_SEIT = 33;

    public function __construct()
    {
        $this->appendMember(new Kundenfeldtyp(self::SONSTIGES, 'Sonstiges'));
        $this->appendMember(new Kundenfeldtyp(self::FUEHRERSCHEIN, 'Führerschein'));
        $this->appendMember(new Kundenfeldtyp(self::FUEHRERSCHEIN_SEIT, 'Führerschein seit'));
    }
}
