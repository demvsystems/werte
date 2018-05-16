<?php

namespace Demv\Werte\Dokumente\Dokumenttypen;

use Demv\Werte\Dokumente\DokumenttypInterface;
use Demv\Werte\Value;

/**
 * Class Kuendigung
 * @package Demv\Werte\Dokumente\DokumentTypen
 */
final class Kuendigung extends Value implements DokumenttypInterface
{
    public const ID = 68;

    public function __construct()
    {
        parent::__construct(self::ID, 'Kuendigung');
    }
}
