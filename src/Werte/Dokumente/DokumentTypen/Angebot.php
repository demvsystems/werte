<?php

namespace Demv\Werte\Dokumente\Dokumenttypen;

use Demv\Werte\Dokumente\DokumenttypInterface;
use Demv\Werte\Value;

/**
 * Class Erstantrag
 * @package Demv\Werte\Dokumente\DokumentTypen
 */
final class Angebot extends Value implements DokumenttypInterface
{
    public const ID = 62;

    public function __construct()
    {
        parent::__construct(self::ID, 'Angebot');
    }
}
