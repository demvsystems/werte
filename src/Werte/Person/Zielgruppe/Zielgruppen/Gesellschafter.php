<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Person\Zielgruppe\ZielgruppeInterface;
use Demv\Werte\Value;

class Gesellschafter extends Value implements ZielgruppeInterface
{
    const ID = 11;

    public function __construct()
    {
        parent::__construct(self::ID, 'Gesellschafter Geschäftsführer GmbH');
    }
}
