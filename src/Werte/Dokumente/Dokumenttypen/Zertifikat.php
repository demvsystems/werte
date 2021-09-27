<?php

namespace Demv\Werte\Dokumente\Dokumenttypen;

use Demv\Werte\Dokumente\DokumenttypInterface;
use Demv\Werte\Value;

/**
 * Class Erstantrag
 * @package Demv\Werte\Dokumente\DokumentTypen
 */
final class Zertifikat extends Value implements DokumenttypInterface
{
    public const ID = 598;

    public function __construct()
    {
        parent::__construct(self::ID, 'Zertifikat');
    }
}
