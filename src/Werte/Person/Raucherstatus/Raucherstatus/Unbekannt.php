<?php

namespace Demv\Werte\Person\Raucherstatus\Raucherstatus;

use Demv\Werte\Person\Raucherstatus\RaucherstatusInterface;
use Demv\Werte\Value;

/**
 * Class Unbekannt
 * @package Demv\Werte\Person\Raucherstatus\Raucherstatus
 */
class Unbekannt extends Value implements RaucherstatusInterface
{
    const ID = 0;

    /**
     * BeiEltern constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Unbekannt');
    }
}
