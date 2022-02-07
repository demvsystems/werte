<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class Landwirte extends Value
{
    const ID = 23;

    public function __construct()
    {
        parent::__construct(self::ID, 'Landwirte');
    }
}
