<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class Kinder extends Value
{
    const ID = 19;
    public function __construct()
    {
        parent::__construct(self::ID, 'Kinder');
    }
}
