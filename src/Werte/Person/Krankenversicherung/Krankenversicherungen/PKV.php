<?php

namespace Demv\Werte\Person\Krankenversicherung\Krankenversicherung;

use Demv\Werte\Person\Krankenversicherung\KrankenversicherungInterface;
use Demv\Werte\Value;

/**
 * Class PKV
 * @package Demv\Werte\Person\Krankenversicherung\Krankenversicherung
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