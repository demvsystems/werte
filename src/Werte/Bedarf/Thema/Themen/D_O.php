<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Gewerbe;

/**
 * Class D_O
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
final class D_O extends Bedarfsthema
{
    const ID = 33;

    public function __construct()
    {
        parent::__construct(self::ID, 'D&O', [Gewerbe::D_O]);
    }
}
