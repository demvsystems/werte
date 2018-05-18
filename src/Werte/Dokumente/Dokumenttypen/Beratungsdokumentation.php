<?php

namespace Demv\Werte\Dokumente\Dokumenttypen;

use Demv\Werte\Dokumente\DokumenttypInterface;
use Demv\Werte\Value;

/**
 * Class Beratungsdokumentation
 * @package Demv\Werte\Dokumente\DokumentTypen
 */
final class Beratungsdokumentation extends Value implements DokumenttypInterface
{
    public const ID = 58;

    public function __construct()
    {
        parent::__construct(self::ID, 'Beratungsdokumentation');
    }
}
