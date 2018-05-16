<?php

namespace Demv\Werte\Dokumente\Dokumenttypen;

use Demv\Werte\Dokumente\DokumenttypInterface;
use Demv\Werte\Value;

/**
 * Class Antrag
 * @package Demv\Werte\Dokumente\DokumentTypen
 */
final class Antrag extends Value implements DokumenttypInterface
{
    public const ID = 59;

    public function __construct()
    {
        parent::__construct(self::ID, 'Antrag');
    }
}
