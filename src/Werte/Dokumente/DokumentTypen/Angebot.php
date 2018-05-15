<?php

namespace Demv\Werte\Dokumente\DokumentTypen;

use Demv\Werte\Dokumente\DokumentTypInterface;
use Demv\Werte\Value;

/**
 * Class Erstantrag
 * @package Demv\Werte\Dokumente\DokumentTypen
 */
final class Angebot extends Value implements DokumentTypInterface
{
    const ID = 62;

    public function __construct()
    {
        parent::__construct(self::ID, 'Angebot');
    }
}
