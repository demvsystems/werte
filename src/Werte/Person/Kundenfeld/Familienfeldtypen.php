<?php

declare(strict_types=1);

namespace Demv\Werte\Person\Kundenfeld;

use Demv\Werte\AbstractProvider;

/**
 * @extends AbstractProvider<Kundenfeldtyp>
 */
final class Familienfeldtypen extends AbstractProvider
{
    public const SONSTIGES = 23;

    public function __construct()
    {
        $this->appendMember(new Kundenfeldtyp(self::SONSTIGES, 'Sonstiges'));
    }
}
