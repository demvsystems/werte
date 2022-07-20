<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Person\Zielgruppe\ZielgruppeInterface;
use Demv\Werte\Value;

class Existenzgruender extends Value implements ZielgruppeInterface
{
    const ID = 7;

    public function __construct()
    {
        parent::__construct(self::ID, 'Existenzgründer');
    }
}
