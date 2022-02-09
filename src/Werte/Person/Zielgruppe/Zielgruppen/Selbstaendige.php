<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Person\Zielgruppe\ZielgruppeInterface;
use Demv\Werte\Value;

class Selbstaendige extends Value implements ZielgruppeInterface
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Selbständige/Freiberufler');
    }
}
