<?php

namespace Demv\Werte\Person\Krankenversicherung\Krankenversicherung;

use Demv\Werte\Person\Krankenversicherung\KrankenversicherungInterface;
use Demv\Werte\Value;

/**
 * Class FreieHeilfuersorge
 * @package Demv\Werte\Person\Krankenversicherung\Krankenversicherung
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