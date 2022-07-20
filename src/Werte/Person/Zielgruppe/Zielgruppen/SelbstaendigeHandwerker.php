<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Person\Zielgruppe\ZielgruppeInterface;
use Demv\Werte\Value;

class SelbstaendigeHandwerker extends Value implements ZielgruppeInterface
{
    const ID = 3;

    public function __construct()
    {
        parent::__construct(self::ID, 'Selbständige Handwerker');
    }
}
