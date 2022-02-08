<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Person\Zielgruppe\ZielgruppeInterface;
use Demv\Werte\Value;

class Kinder extends Value implements ZielgruppeInterface
{
    const ID = 19;

    public function __construct()
    {
        parent::__construct(self::ID, 'Kinder');
    }
}
