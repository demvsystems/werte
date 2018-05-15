<?php

namespace Demv\Werte\Dokumente\DokumentTypen;

use Demv\Werte\Dokumente\DokumentTypInterface;
use Demv\Werte\Value;

/**
 * Class Kuendigung
 * @package Demv\Werte\Dokumente\DokumentTypen
 */
final class Kuendigung extends Value implements DokumentTypInterface
{
    const ID = 68;

    public function __construct()
    {
        parent::__construct(self::ID, 'Kuendigung');
    }
}
