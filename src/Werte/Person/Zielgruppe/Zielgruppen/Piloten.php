<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class Piloten extends Value
{
    const ID = 6;

    public function __construct()
    {
        parent::__construct(self::ID, 'Piloten');
    }
}
