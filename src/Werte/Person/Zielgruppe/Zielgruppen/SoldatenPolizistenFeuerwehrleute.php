<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Person\Zielgruppe\ZielgruppeInterface;
use Demv\Werte\Value;

class SoldatenPolizistenFeuerwehrleute extends Value implements ZielgruppeInterface
{
    const ID = 5;

    public function __construct()
    {
        parent::__construct(self::ID, 'Soldaten, Polizisten, Feuerwehrleute');
    }
}
