<?php

namespace Demv\Werte\Dokumente\Dokumenttypen;

use Demv\Werte\Dokumente\DokumenttypInterface;
use Demv\Werte\Value;

final class Schweigepflichtentbindung extends Value implements DokumenttypInterface
{
    public const ID = 643;

    public function __construct()
    {
        parent::__construct(self::ID, 'Schweigepflichtentbindung');
    }
}
