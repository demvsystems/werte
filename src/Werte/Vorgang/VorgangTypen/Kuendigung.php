<?php

declare(strict_types=1);

namespace Demv\Werte\Vorgang\VorgangTypen;

use Demv\Werte\Value;
use Demv\Werte\Vorgang\VorgangTypInterface;

/**
 * Class Kuendigung
 * @package Demv\Werte\Vorgang\VorgangTypen
 */
final class Kuendigung extends Value implements VorgangTypInterface
{
    const ID = 9;

    public function __construct()
    {
        parent::__construct(self::ID, 'Kündigung');
    }
}
