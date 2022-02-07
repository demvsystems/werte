<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class Schueler extends Value
{
    const ID = 22;

    public function __construct()
    {
        parent::__construct(self::ID, 'Schüler');
    }
}
