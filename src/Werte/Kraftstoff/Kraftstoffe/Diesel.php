<?php

namespace Demv\Werte\Kraftstoff\Kraftstoffe;

use Demv\Werte\Kraftstoff\KraftstoffInterface;
use Demv\Werte\Value;

/**
 * Class Diesel
 * @package Demv\Werte\Kraftstoff\Kraftstoffe
 */
final class Diesel extends Value implements KraftstoffInterface
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'Diesel');
    }
}