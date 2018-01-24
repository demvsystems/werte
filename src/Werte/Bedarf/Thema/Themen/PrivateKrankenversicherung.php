<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Krankenversicherung;

/**
 * Class PrivateKrankenversicherung
 * @package Demv\Werte\Bedarf\Thema\Berufsunfaehigkeit
 */
final class PrivateKrankenversicherung extends Bedarfsthema
{
    const ID = 2;

    /**
     * Berufsunfaehigkeit constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Private Krankenversicherung', [Krankenversicherung::PRIVATE_KRANKENVOLLVERSICHERUNG]);
    }
}