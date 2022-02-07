<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class Gesellschafter extends Value
{
    const ID = 11;

    public function __construct()
    {
        parent::__construct(self::ID, 'Gesellschafter Geschäftsführer GmbH');
    }
}
