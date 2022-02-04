<?php
declare(strict_types=1);

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Vorsorge;

class Dienstunfaehigkeitsversicherung extends Bedarfsthema
{
    const ID = 37;

    public function __construct()
    {
        parent::__construct(
            self::ID,
            'Dienstunfaehigkeitsversicherung',
            [Vorsorge::DIENSTUNFAEHIGKEITSVERSICHERUNG],
            'Dienstunfaehigkeits&shy;versicherung',
        );
    }
}
