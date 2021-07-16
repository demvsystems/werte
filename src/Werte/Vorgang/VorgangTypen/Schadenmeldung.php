<?php

namespace Demv\Werte\Vorgang\VorgangTypen;

use Demv\Werte\Value;
use Demv\Werte\Vorgang\VorgangTypInterface;

/**
 * Class Schadenmeldung
 * @package Demv\Werte\Kraftstoff\Kraftstoffe
 */
final class Schadenmeldung extends Value implements VorgangTypInterface
{
    const ID = 17;

    public function __construct()
    {
        parent::__construct(self::ID, 'Schadenmeldung');
    }
}
