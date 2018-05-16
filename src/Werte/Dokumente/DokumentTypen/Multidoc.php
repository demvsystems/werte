<?php

namespace Demv\Werte\Dokumente\Dokumenttypen;

use Demv\Werte\Dokumente\DokumenttypInterface;
use Demv\Werte\Value;

/**
 * Class Multidoc
 * @package Demv\Werte\Dokumente\DokumentTypen
 */
final class Multidoc extends Value implements DokumenttypInterface
{
    public const ID = 129;

    public function __construct()
    {
        parent::__construct(self::ID, 'Multidoc');
    }
}
