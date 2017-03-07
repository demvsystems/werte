<?php

namespace Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen;

use Demv\Werte\Sparte\Krankenversicherung\KrankenversicherungInterface;
use Demv\Werte\Value;

/**
 * Class GKV
 * @package Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen
 */
final class GKV extends Value implements KrankenversicherungInterface
{
    const ID = 1;

    /**
     * GKV constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'GKV');
    }
}