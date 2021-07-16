<?php

namespace Demv\Werte\Vorgang\VorgangTypen;

use Demv\Werte\Value;
use Demv\Werte\Vorgang\VorgangTypInterface;

/**
 * Class Risikovoranfrage
 * @package Demv\Werte\Vorgang\VorgangTypen
 */
final class Risikovoranfrage extends Value implements VorgangTypInterface
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Risikovoranfrage');
    }
}
