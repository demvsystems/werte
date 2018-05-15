<?php

namespace Demv\Werte\Dokumente\DokumentTypen;

use Demv\Werte\Dokumente\DokumentTypInterface;
use Demv\Werte\Value;

/**
 * Class Leistungsvergleich
 * @package Demv\Werte\Dokumente\DokumentTypen
 */
final class Leistungsuebersicht extends Value implements DokumentTypInterface
{
    public const ID = 66;

    public function __construct()
    {
        parent::__construct(self::ID, 'Leistungsuebersicht');
    }
}
