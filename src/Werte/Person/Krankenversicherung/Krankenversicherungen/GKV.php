<?php

namespace Demv\Werte\Person\Krankenversicherung\Krankenversicherung;

use Demv\Werte\Person\Krankenversicherung\KrankenversicherungInterface;
use Demv\Werte\Value;

/**
 * Class GKV
 * @package Demv\Werte\Person\Krankenversicherung\Krankenversicherung
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