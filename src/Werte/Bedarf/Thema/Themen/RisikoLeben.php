<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\Vorsorge;

/**
 * Class RisikoLeben
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
final class RisikoLeben extends Bedarfsthema
{
    const ID = 3;

    /**
     * RisikoLeben constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Risiko Leben', [Vorsorge::RISIKOLEBEN]);
    }
}