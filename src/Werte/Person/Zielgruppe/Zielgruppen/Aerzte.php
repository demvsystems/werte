<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Person\Zielgruppe\ZielgruppeInterface;
use Demv\Werte\Value;

class Aerzte extends Value implements ZielgruppeInterface
{
    const ID = 12;

    public function __construct()
    {
        parent::__construct(self::ID, 'Ärzte');
    }
}
