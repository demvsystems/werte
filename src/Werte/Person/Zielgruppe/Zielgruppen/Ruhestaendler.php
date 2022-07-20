<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Person\Zielgruppe\ZielgruppeInterface;
use Demv\Werte\Value;

class Ruhestaendler extends Value implements ZielgruppeInterface
{
    const ID = 17;

    public function __construct()
    {
        parent::__construct(self::ID, 'Ruheständler');
    }
}
