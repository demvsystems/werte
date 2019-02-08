<?php

namespace Demv\Werte\Person\Raucherstatus\Raucherstatus;

use Demv\Werte\Person\Raucherstatus\RaucherstatusInterface;
use Demv\Werte\Value;

/**
 * Class Nein
 * @package Demv\Werte\Person\Raucherstatus\Raucherstatus
 */
class Nein extends Value implements RaucherstatusInterface
{
    const ID = 2;

    /**
     * BeiEltern constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Nein');
    }
}
