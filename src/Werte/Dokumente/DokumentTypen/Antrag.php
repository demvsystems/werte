<?php

namespace Demv\Werte\Dokumente\DokumentTypen;

use Demv\Werte\Dokumente\DokumentTypInterface;
use Demv\Werte\Value;

/**
 * Class Antrag
 * @package Demv\Werte\Dokumente\DokumentTypen
 */
final class Antrag extends Value implements DokumentTypInterface
{
    const ID = 59;

    public function __construct()
    {
        parent::__construct(self::ID, 'Antrag');
    }
}
