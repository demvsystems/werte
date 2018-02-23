<?php

namespace Demv\Werte\Kraftstoff\Kraftstoffe;

use Demv\Werte\Kraftstoff\KraftstoffInterface;
use Demv\Werte\Value;

/**
 * Class Hybrid
 * @package Demv\Werte\Kraftstoff\Kraftstoffe
 */
final class Hybrid extends Value implements KraftstoffInterface
{
    const ID = 5;

    public function __construct()
    {
        parent::__construct(self::ID, 'Hybrid');
    }
}
