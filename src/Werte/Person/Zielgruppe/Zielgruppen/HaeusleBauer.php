<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class HaeusleBauer extends Value
{
    const ID = 20;

    public function __construct()
    {
        parent::__construct(self::ID, 'Häusle-Bauer');
    }
}
