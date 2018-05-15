<?php

namespace Demv\Werte\Dokumente\DokumentTypen;

use Demv\Werte\Dokumente\DokumentTypInterface;
use Demv\Werte\Value;

/**
 * Class Leistungsvergleich
 * @package Demv\Werte\Dokumente\DokumentTypen
 */
final class Leistungsvergleich extends Value implements DokumentTypInterface
{
    const ID = 80;

    public function __construct()
    {
        parent::__construct(self::ID, 'Leistungsvergleich');
    }
}
