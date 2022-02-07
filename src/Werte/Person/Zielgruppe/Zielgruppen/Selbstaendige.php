<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class Selbstaendige extends Value
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Selbständige/Freiberufler');
    }
}
