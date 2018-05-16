<?php

namespace Demv\Werte\Dokumente\Dokumenttypen;

use Demv\Werte\Dokumente\DokumenttypInterface;
use Demv\Werte\Value;

/**
 * Class Sepamandant
 * @package Demv\Werte\Dokumente\DokumentTypen
 */
final class Sepamandant extends Value implements DokumenttypInterface
{
    public const ID = 94;

    public function __construct()
    {
        parent::__construct(self::ID, 'Sepamandant');
    }
}
