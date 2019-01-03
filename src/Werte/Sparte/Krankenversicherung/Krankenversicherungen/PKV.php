<?php

namespace Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen;

use Demv\Werte\Sparte\Krankenversicherung\KrankenversicherungInterface;
use Demv\Werte\Value;

/**
 * Class PKV
 * @package Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen
 */
final class PKV extends Value implements KrankenversicherungInterface
{
    const ID = 2;

    /**
     * PKV constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'PKV');
    }
}
