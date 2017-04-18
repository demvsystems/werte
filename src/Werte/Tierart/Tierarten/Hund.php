<?php

namespace Demv\Werte\Tierart\Tierarten;

use Demv\Werte\Tierart\TierartInterface;
use Demv\Werte\Value;

/**
 * Class Hund
 * @package Demv\Werte\Tierart\Tierarten
 */
final class Hund extends Value implements TierartInterface
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Hund');
    }
}