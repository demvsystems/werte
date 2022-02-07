<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class Kuenstler extends Value
{
    const ID = 8;

    public function __construct()
    {
        parent::__construct(self::ID, 'Künstler und Publizisten');
    }
}
