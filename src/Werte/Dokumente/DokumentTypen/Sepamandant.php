<?php

namespace Demv\Werte\Dokumente\DokumentTypen;

use Demv\Werte\Dokumente\DokumentTypInterface;
use Demv\Werte\Value;

/**
 * Class Sepamandant
 * @package Demv\Werte\Dokumente\DokumentTypen
 */
final class Sepamandant extends Value implements DokumentTypInterface
{
    const ID = 94;

    public function __construct()
    {
        parent::__construct(self::ID, 'Sepamandant');
    }
}
