<?php

namespace Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen;

use Demv\Werte\Sparte\Krankenversicherung\KrankenversicherungInterface;
use Demv\Werte\Value;

/**
 * Class FreieHeilfuersorge
 * @package Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen
 */
final class FreieHeilfuersorge extends Value implements KrankenversicherungInterface
{
    const ID = 3;

    /**
     * FreieHeilfuersorge constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Freie Heilfürsorge');
    }
}