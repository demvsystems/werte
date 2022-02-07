<?php

namespace Demv\Werte\Person\Zielgruppe\Zielgruppen;

use Demv\Werte\Value;

class AngestellteOeffentlicherDienst extends Value
{
    const ID = 13;

    public function __construct()
    {
        parent::__construct(self::ID, 'Angestellte öffentlicher Dienst');
    }
}
