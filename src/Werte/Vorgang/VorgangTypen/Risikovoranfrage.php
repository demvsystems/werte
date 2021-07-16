<?php

namespace Demv\Werte\Vorgang\VorgangTypen;

use Demv\Werte\Vorgang\VorgangTypInterface;
use Demv\Werte\Value;

/**
 * Class Risikovoranfrage
 * @package Demv\Werte\Kraftstoff\Kraftstoffe
 */
final class Risikovoranfrage extends Value implements VorgangTypInterface
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Risikovoranfrage');
    }
}
