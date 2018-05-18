<?php

namespace Demv\Werte\Dokumente\Dokumenttypen;

use Demv\Werte\Dokumente\DokumenttypInterface;
use Demv\Werte\Value;

/**
 * Class Leistungsvergleich
 * @package Demv\Werte\Dokumente\DokumentTypen
 */
final class Leistungsuebersicht extends Value implements DokumenttypInterface
{
    public const ID = 66;

    public function __construct()
    {
        parent::__construct(self::ID, 'Leistungsuebersicht');
    }
}
