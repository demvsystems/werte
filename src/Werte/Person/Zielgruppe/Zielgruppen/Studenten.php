<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class Studenten extends Value
{
    const ID = 9;

    public function __construct()
    {
        parent::__construct(self::ID, 'Studenten');
    }
}
