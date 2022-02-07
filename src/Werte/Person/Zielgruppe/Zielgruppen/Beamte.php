<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class Beamte extends Value
{
    const ID = 4;

    public function __construct()
    {
        parent::__construct(self::ID, 'Beamte');
    }
}
