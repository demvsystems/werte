<?php

namespace Demv\Werte\Dokumente\DokumentTypen;

use Demv\Werte\Dokumente\DokumentTypInterface;
use Demv\Werte\Value;

/**
 * Class Multidoc
 * @package Demv\Werte\Dokumente\DokumentTypen
 */
final class Multidoc extends Value implements DokumentTypInterface
{
    const ID = 129;

    public function __construct()
    {
        parent::__construct(self::ID, 'Multidoc');
    }
}
