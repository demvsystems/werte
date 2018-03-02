<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Vorsorge;

/**
 * Class Altersvorsorge
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
final class Altersvorsorge extends Bedarfsthema
{
    const ID = 4;

    /**
     * Altersvorsorge constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Altersvorsorge', [Vorsorge::ALTERSVORSORGE]);
    }
}
