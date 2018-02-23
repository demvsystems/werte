<?php

namespace Demv\Werte\Immobilie\Typ\Typen;

use Demv\Werte\Immobilie\Typ\ImmobilienTypInterface;
use Demv\Werte\Value;

/**
 * Class Haus
 * @package Demv\Werte\Immobilie\Typ\Typen
 */
final class Haus extends Value implements ImmobilienTypInterface
{
    const ID = 1;

    /**
     * Haus constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Haus');
    }
}
