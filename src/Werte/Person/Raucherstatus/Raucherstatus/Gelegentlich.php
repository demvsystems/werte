<?php

namespace Demv\Werte\Person\Raucherstatus\Raucherstatus;

use Demv\Werte\Person\Raucherstatus\RaucherstatusInterface;
use Demv\Werte\Value;

/**
 * Class Gelegentlich
 * @package Demv\Werte\Person\Raucherstatus\Raucherstatus
 */
class Gelegentlich extends Value implements RaucherstatusInterface
{
    const ID = 3;

    /**
     * BeiEltern constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Gelegentlich');
    }
}
