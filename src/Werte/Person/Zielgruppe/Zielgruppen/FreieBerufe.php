<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Person\Zielgruppe\ZielgruppeInterface;
use Demv\Werte\Value;

class FreieBerufe extends Value implements ZielgruppeInterface
{
    const ID = 15;

    public function __construct()
    {
        parent::__construct(self::ID, 'Freie Berufe');
    }
}
