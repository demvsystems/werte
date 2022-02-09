<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Person\Zielgruppe\ZielgruppeInterface;
use Demv\Werte\Value;

class Angestellte extends Value implements ZielgruppeInterface
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'Angestellte');
    }
}
