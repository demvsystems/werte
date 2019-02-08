<?php

namespace Demv\Werte\Person\Raucherstatus\Raucherstatus;

use Demv\Werte\Person\Raucherstatus\RaucherstatusInterface;
use Demv\Werte\Value;

/**
 * Class Ja
 * @package Demv\Werte\Person\Raucherstatus\Raucherstatus
 */
class Ja extends Value implements RaucherstatusInterface
{
    const ID = 1;

    /**
     * BeiEltern constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Ja');
    }
}
