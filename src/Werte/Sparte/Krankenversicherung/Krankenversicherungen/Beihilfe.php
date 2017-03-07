<?php

namespace Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen;

use Demv\Werte\Sparte\Krankenversicherung\KrankenversicherungInterface;
use Demv\Werte\Value;

/**
 * Class Beihilfe
 * @package Demv\Werte\Sparte\Krankenversicherung\Krankenversicherungen
 */
final class Beihilfe extends Value implements KrankenversicherungInterface
{
    const ID = 4;

    /**
     * Beihilfe constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Beihilfe');
    }
}