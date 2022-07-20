<?php

declare(strict_types=1);

namespace Demv\Werte\Vorgang\VorgangTypen;

use Demv\Werte\Value;
use Demv\Werte\Vorgang\VorgangTypInterface;

/**
 * Class AntragEinreichen
 * @package Demv\Werte\Vorgang\VorgangTypen
 */
final class AntragEinreichen extends Value implements VorgangTypInterface
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'AntragEinreichen');
    }
}
