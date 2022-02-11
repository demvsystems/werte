<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Vorsorge;

/**
 * Class DreadDisease
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class DreadDisease extends Bedarfsthema
{
    const ID = 21;

    public function __construct()
    {
        parent::__construct(self::ID, 'Dread-Disease', [Vorsorge::DREAD_DISEASE]);
    }
}
