<?php

namespace Demv\Werte\Person\Krankenversicherung\Krankenversicherung;

use Demv\Werte\Person\Krankenversicherung\KrankenversicherungInterface;
use Demv\Werte\Value;

/**
 * Class Beihilfe
 * @package Demv\Werte\Person\Krankenversicherung\Krankenversicherung
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