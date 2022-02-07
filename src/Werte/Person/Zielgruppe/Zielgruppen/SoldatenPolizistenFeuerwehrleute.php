<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class SoldatenPolizistenFeuerwehrleute extends Value
{
    const ID = 5;

    public function __construct()
    {
        parent::__construct(self::ID, 'Soldaten, Polizisten, Feuerwehrleute');
    }
}
