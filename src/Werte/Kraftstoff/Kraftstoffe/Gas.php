<?php

namespace Demv\Werte\Kraftstoff\Kraftstoffe;

use Demv\Werte\Kraftstoff\KraftstoffInterface;
use Demv\Werte\Value;

/**
 * Class Gas
 * @package Demv\Werte\Kraftstoff\Kraftstoffe
 */
final class Gas extends Value implements KraftstoffInterface
{
    const ID = 4;

    public function __construct()
    {
        parent::__construct(self::ID, 'Gas');
    }
}
