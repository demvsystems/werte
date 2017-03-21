<?php

namespace Demv\Werte\Person\Anrede\Anreden;

use Demv\Werte\Person\Anrede\AnredeInterface;
use Demv\Werte\Value;

/**
 * Class Herr
 * @package Demv\Werte\Person\Anrede\Anreden
 */
final class Herr extends Value implements AnredeInterface
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Herr');
    }
}