<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\PrivateKrankenversicherung;

/**
 * Class AuslandsKV
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class AuslandsKV extends Bedarfsthema
{
    const ID = 18;

    public function __construct()
    {
        parent::__construct(self::ID, 'Auslandskrankenversicherung', [PrivateKrankenversicherung::AUSLANDSKRANKENREISEVERSICHERUNG]);
    }
}
