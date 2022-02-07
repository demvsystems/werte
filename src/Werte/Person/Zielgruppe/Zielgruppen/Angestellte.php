<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class Angestellte extends Value
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'Angestellte');
    }
}
