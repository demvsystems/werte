<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class Auszubildende extends Value
{
    const ID = 10;

    public function __construct()
    {
        parent::__construct(self::ID, 'Auszubildende');
    }
}
