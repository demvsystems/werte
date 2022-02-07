<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class Mediziner extends Value
{
    const ID = 21;

    public function __construct()
    {
        parent::__construct(self::ID, 'Mediziner');
    }
}
