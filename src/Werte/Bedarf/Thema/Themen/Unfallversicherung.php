<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\PrivateSachversicherung;

/**
 * Class Unfallversicherung
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
final class Unfallversicherung extends Bedarfsthema
{
    const ID = 8;

    /**
     * Unfallversicherung constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Unfallversicherung', [PrivateSachversicherung::UNFALLVERSICHERUNG]);
    }
}
