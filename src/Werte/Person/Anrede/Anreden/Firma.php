<?php

namespace Demv\Werte\Person\Anrede\Anreden;

use Demv\Werte\Person\Anrede\AnredeInterface;
use Demv\Werte\Value;

/**
 * Class Firma
 * @package Demv\Werte\Person\Anrede\Anreden
 */
final class Firma extends Value implements AnredeInterface
{
    const ID = 3;

    public function __construct()
    {
        parent::__construct(self::ID, 'Firma');
    }
}