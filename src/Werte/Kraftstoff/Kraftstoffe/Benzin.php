<?php

namespace Demv\Werte\Kraftstoff\Kraftstoffe;

use Demv\Werte\Kraftstoff\KraftstoffInterface;
use Demv\Werte\Value;

/**
 * Class Benzin
 * @package Demv\Werte\Kraftstoff\Kraftstoffe
 */
final class Benzin extends Value implements KraftstoffInterface
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Benzin');
    }
}