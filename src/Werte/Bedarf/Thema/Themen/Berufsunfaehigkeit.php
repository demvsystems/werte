<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\BaseBedarfsthema;
use Demv\Werte\Sparte\Sparten\Vorsorge;

/**
 * Class Berufsunfaehigkeit
 * @package Demv\Werte\Bedarf\Thema\Themen\Berufsunfaehigkeit
 */
final class Berufsunfaehigkeit extends BaseBedarfsthema
{
    const ID = 1;

    /**
     * Berufsunfaehigkeit constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Berufsunfähigkeit', [Vorsorge::BERUFSUNFAEHIGKEITSVERSICHERUNG]);
    }
}