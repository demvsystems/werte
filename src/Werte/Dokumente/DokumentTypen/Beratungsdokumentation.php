<?php

namespace Demv\Werte\Dokumente\DokumentTypen;

use Demv\Werte\Dokumente\DokumentTypInterface;
use Demv\Werte\Value;

/**
 * Class Beratungsdokumentation
 * @package Demv\Werte\Dokumente\DokumentTypen
 */
final class Beratungsdokumentation extends Value implements DokumentTypInterface
{
    const ID = 58;

    public function __construct()
    {
        parent::__construct(self::ID, 'Beratungsdokumentation');
    }
}
