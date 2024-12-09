<?php

namespace Demv\Werte\Bedarf\Thema\Themen;

use Demv\Werte\Bedarf\Thema\Bedarfsthema;
use Demv\Werte\Sparte\Sparten\PrivateSachversicherung;

/**
 * Class Tierhalterhaftpflicht
 * @package Demv\Werte\Bedarf\Thema\Themen
 */
class Tierhalterhaftpflicht extends Bedarfsthema
{
    const ID = 16;

    /**
     * Tierhalterhaftpflicht constructor.
     */
    public function __construct()
    {
        parent::__construct(
            self::ID,
            'Tierhalterhaftpflicht',
            [
                PrivateSachversicherung::TIERHALTERHAFTPFLICHT,
                PrivateSachversicherung::HUNDEHALTERHAFTPFLICHT,
                PrivateSachversicherung::PFERDEHALTERHAFTPFLICHT,
            ],
        );
    }
}
