<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\PrivateSachversicherung;

/**
 * Class Hausrat
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Hausrat extends Bedarfsthema
{
    const ID = 11;

    /**
     * Hausrat constructor.
     */
    public function __construct()
    {
        parent::__construct(self::ID, 'Hausrat', [PrivateSachversicherung::HAUSRAT]);
    }
}
