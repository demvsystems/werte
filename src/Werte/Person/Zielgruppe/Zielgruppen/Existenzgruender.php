<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class Existenzgruender extends Value
{
    const ID = 7;

    public function __construct()
    {
        parent::__construct(self::ID, 'Existenzgründer');
    }
}
