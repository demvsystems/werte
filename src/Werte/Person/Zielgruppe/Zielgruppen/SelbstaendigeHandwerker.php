<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class SelbstaendigeHandwerker extends Value
{
    const ID = 3;

    public function __construct()
    {
        parent::__construct(self::ID, 'Selbständige Handwerker');
    }
}
