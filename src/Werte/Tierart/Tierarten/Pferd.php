<?php

namespace Demv\Werte\Tierart\Tierarten;

use Demv\Werte\Tierart\TierartInterface;
use Demv\Werte\Value;

/**
 * Class Pferd
 * @package Demv\Werte\Tierart\Tierarten
 */
final class Pferd extends Value implements TierartInterface
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'Pferd');
    }

    /**
     * @return string
     */
    public function getMehrzahl(): string
    {
        return 'Pferde';
    }
}
