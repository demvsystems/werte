<?php

namespace Demv\Werte\Kraftstoff\Kraftstoffe;

use Demv\Werte\Kraftstoff\KraftstoffInterface;
use Demv\Werte\Value;

/**
 * Class Elektro
 * @package Demv\Werte\Kraftstoff\Kraftstoffe
 */
final class Elektro extends Value implements KraftstoffInterface
{
    const ID = 3;

    public function __construct()
    {
        parent::__construct(self::ID, 'Elektro');
    }
}